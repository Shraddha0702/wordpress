<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
	
do_action('wp_ajax_' . 'AddUpdateItemCategory');
do_action('wp_ajax_nopriv_' . 'AddUpdateItemCategory');
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
	
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>

<script type="text/javascript">
    var ajaxurl_manual = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>
	</body>
</html>
