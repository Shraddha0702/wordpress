<?php


namespace WPDesk\ShopMagic\Recipe;

use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use WPDesk\ShopMagic\Automation\AutomationElementLists;

final class RecipeProvider implements LoggerAwareInterface {
	use LoggerAwareTrait;

	/** @var string */
	private $dir;

	/** @var AutomationElementLists */
	private $dependencies;

	public function __construct( string $dir, AutomationElementLists $dependencies ) {
		$this->dir          = $dir;
		$this->dependencies = $dependencies;
	}

	public function get_recipe( string $id ): Recipe {
		$full_filename = $this->dir . '/' . $id;

		$file_content = file_get_contents( $full_filename );

		if ( $file_content === false ) {
			throw new RecipeException( sprintf( 'File "%s" could not be successfully opened!', $full_filename ) );
		}

		$json_recipe = json_decode( $file_content, true );
		if ( ! is_array( $json_recipe ) ) {
			throw new RecipeException( json_last_error_msg(), json_last_error() );
		}

		return new Recipe(
			$json_recipe,
			$id,
			$this->dependencies
		);
	}

	private function get_locale(): string {
		$locale = get_locale();
		if ( ! file_exists( $this->dir . '/' . $locale ) ) {
			$default_locale = 'en_US';
			$locale         = $default_locale;
		}

		return $locale;
	}

	/** @return \Generator<Recipe> */
	public function get_recipes(): \Generator {
		$locale       = $this->get_locale();
		$lang_path    = $this->dir . '/' . $locale;
		$recipe_files = (array) scandir( $lang_path );
		sort( $recipe_files, SORT_NATURAL );
		foreach ( $recipe_files as $filename ) {
			$full_filename = $lang_path . '/' . $filename;
			if ( is_file( $full_filename ) ) {
				try {
					yield $this->get_recipe( $locale . '/' . $filename );
				} catch ( RecipeException $e ) {
					if ( $this->logger ) {
						$this->logger->error( sprintf( 'Recipe "%s" could not be read. Skipping. Reason: %s', $full_filename, $e->getMessage() ) );
					}
				}
			}
		}
	}
}
