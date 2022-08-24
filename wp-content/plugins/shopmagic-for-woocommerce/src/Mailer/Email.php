<?php
declare( strict_types=1 );

namespace WPDesk\ShopMagic\Mailer;

use WPDesk\ShopMagic\Admin\Settings\GeneralSettings;

/**
 * Email message composed as object.
 */
class Email {

	/** @var string */
	public $from;

	/** @var string */
	public $from_name;

	/** @var string */
	public $to;

	/** @var string */
	public $subject;

	/** @var string */
	public $message;

	/** @var string[] */
	private $headers = [];

	/** @var string[] */
	public $attachments = [];

	public function __construct() {
		$this->from      = GeneralSettings::get_option( 'shopmagic_email_from_address' ) ?: get_option( 'woocommerce_email_from_address' );
		$this->from_name = GeneralSettings::get_option( 'shopmagic_email_from_name' ) ?: get_option( 'woocommerce_email_from_name' );
	}

	public function to( string $to ): self {
		$this->to = $to;
		return $this;
	}

	public function bcc( string $bcc ): self {
		$this->set_header( 'Bcc', $bcc );
		return $this;
	}

	public function set_header( string $header, string $value ): self {
		$this->headers[ $header ] = $value;
		return $this;
	}

	public function get_header( string $header ): string {
		return $this->headers[ $header ] ?? '';
	}

	/** @return string[] */
	public function get_headers(): array {
		$result = [];
		foreach ( $this->headers as $header => $value ) {
			$result[] = "$header: $value";
		}
		return $result;
	}

	public function subject( string $subject ): self {
		$this->subject = $subject;
		return $this;
	}

	public function message( string $message ): self {
		$this->message = $message;
		return $this;
	}

	public function content_type( string $content_type ): self {
		$this->set_header( 'Content-Type', $content_type );
		return $this;
	}

	/**
	 * @param string[]|string $attachment
	 */
	public function attach( $attachment ): self {
		if ( is_array( $attachment ) ) {
			foreach ( $attachment as $item ) {
				$this->attach( $item );
			}
		} else {
			$this->attachments[] = $attachment;
		}
		return $this;
	}

}
