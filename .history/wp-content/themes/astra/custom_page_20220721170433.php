<?php
/**

// Template Name: Custom PHP

 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php 
		global $results;
		$results = $wpdb->get_results( "SELECT * FROM $wpdb->posts WHERE `post_type`='post' LIMIT 4" );
		$current_user = wp_get_current_user();
		$user = new WP_User(get_current_user_id());
		$id=$current_user->ID;
		global $wpdb;
		$post_id = "SELECT 
  		posts.id, 
  		posts.post_name, 
  		posts.post_title, 
  		users.id author_id, 
  		users.display_name author_display_name, 
  		posts.post_type, 
  		posts.post_status, 
  		posts.post_parent, 
  		posts.comment_status, 
  		posts.comment_count, 
  		posts.post_date_gmt, 
  		posts.post_modified_gmt, 
  		posts.guid 
  		FROM 
  		wp_posts posts 
  		JOIN wp_users users ON posts.post_author = users.id 
		WHERE 
  		post_type IN ('shop_order') and users.ID=$id";
		$post_id_results = $wpdb->get_results($post_id, ARRAY_A);
        foreach ($post_id_results as $post_id_results)
        {

			$post_name = $post_id_results['post_name'];
			$author_id = $post_id_results['author_id'];
		}
		echo '<tr>
				<td>';
				foreach($post_name as $post_name){
                   echo '<p><small>'.get_termmeta_value($post_name).'</small></p>';
				}
		?>
		<table>
		<tr>
			<td> Order Items</td>
			<td>Order Total</td>
		</tr>
			<?php echo '<tr>
			<td>'.$order_items.'</td> 		
			<td>'.$order_total.'</td> 
			<td>'.$id.'</td> 
			</tr>';?>
		</table>
		<?php

   		print_r($post_id_results);
		//print_r($results);
		array_values($post_id)[0];

		$current_user = wp_get_current_user();
		echo 'Username: ' . $current_user->user_login . '<br />';
		echo($current_user->user_login);
 		echo 'Username: ' . $current_user->display_name ;
		$current_user_id = get_current_user_id();
		echo $current_user_id;
		global $current_user; wp_get_current_user(); ?>
		<?php 
 		echo 'Username: ' . $current_user->user_login . "\n"; 
 

		?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
