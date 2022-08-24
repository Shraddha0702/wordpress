<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '3.8.5' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '3.6.10' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-update.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-pb-compatibility.php';


/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

if ( is_admin() ) {

	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';

}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';

require_once get_template_directory().'/woocommerce/functions.php';

//Add items to the menu
add_filter('woocommerce_account_menu_items', 'equiptract_my_maintenance_link', 40);
function equiptract_my_maintenance_link($menu_links){
    $menu_links = array_slice($menu_links, 0, 5, true) + array(
        'my-maintenance' => 'My Maintenance Records'
    ) + array_slice($menu_links, 5, NULL, true);
    return $menu_links;
}

//Order History
/**
 * @snippet       Get Customers Who Purchased Product ID
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 6
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
 
add_shortcode( 'my_purchased_products', 'bbloomer_products_bought_by_curr_user' );
   
function bbloomer_products_bought_by_curr_user() {
   
    // GET CURR USER
    $current_user = wp_get_current_user();
    if ( 0 == $current_user->ID ) return;
   
    // GET USER ORDERS (COMPLETED + PROCESSING)
    $customer_orders = get_posts( array(
        'numberposts' => -1,
        'meta_key'    => '_customer_user',
        'meta_value'  => $current_user->ID,
        'post_type'   => wc_get_order_types(),
        'post_status' => array_keys( wc_get_is_paid_statuses() ),
    ) );
   
    // LOOP THROUGH ORDERS AND GET PRODUCT IDS
    if ( ! $customer_orders ) return;
    $product_ids = array();
    foreach ( $customer_orders as $customer_order ) {
        $order = wc_get_order( $customer_order->ID );
        $items = $order->get_items();
        foreach ( $items as $item ) {
            $product_id = $item->get_product_id();
            $product_ids[] = $product_id;
        }
    }
    $product_ids = array_unique( $product_ids );
    $product_ids_str = implode( ",", $product_ids );
   
    // PASS PRODUCT IDS TO PRODUCTS SHORTCODE
    return do_shortcode("[products ids='$product_ids_str']");
   
}

// Add order history to the dashboard
add_action('order_history', 'order_data');
function order_data(){
global $wpdb;
$post_id = "select
    p.ID as order_id,
    p.post_date,
    max( CASE WHEN pm.meta_key = '_billing_email' and p.ID = pm.post_id THEN pm.meta_value END ) as billing_email,
    max( CASE WHEN pm.meta_key = '_billing_first_name' and p.ID = pm.post_id THEN pm.meta_value END ) as _billing_first_name,
    max( CASE WHEN pm.meta_key = '_billing_last_name' and p.ID = pm.post_id THEN pm.meta_value END ) as _billing_last_name,
    max( CASE WHEN pm.meta_key = '_billing_address_1' and p.ID = pm.post_id THEN pm.meta_value END ) as _billing_address_1,
    max( CASE WHEN pm.meta_key = '_billing_address_2' and p.ID = pm.post_id THEN pm.meta_value END ) as _billing_address_2,
    max( CASE WHEN pm.meta_key = '_billing_city' and p.ID = pm.post_id THEN pm.meta_value END ) as _billing_city,
    max( CASE WHEN pm.meta_key = '_billing_state' and p.ID = pm.post_id THEN pm.meta_value END ) as _billing_state,
    max( CASE WHEN pm.meta_key = '_billing_postcode' and p.ID = pm.post_id THEN pm.meta_value END ) as _billing_postcode,
    max( CASE WHEN pm.meta_key = '_shipping_first_name' and p.ID = pm.post_id THEN pm.meta_value END ) as _shipping_first_name,
    max( CASE WHEN pm.meta_key = '_shipping_last_name' and p.ID = pm.post_id THEN pm.meta_value END ) as _shipping_last_name,
    max( CASE WHEN pm.meta_key = '_shipping_address_1' and p.ID = pm.post_id THEN pm.meta_value END ) as _shipping_address_1,
    max( CASE WHEN pm.meta_key = '_shipping_address_2' and p.ID = pm.post_id THEN pm.meta_value END ) as _shipping_address_2,
    max( CASE WHEN pm.meta_key = '_shipping_city' and p.ID = pm.post_id THEN pm.meta_value END ) as _shipping_city,
    max( CASE WHEN pm.meta_key = '_shipping_state' and p.ID = pm.post_id THEN pm.meta_value END ) as _shipping_state,
    max( CASE WHEN pm.meta_key = '_shipping_postcode' and p.ID = pm.post_id THEN pm.meta_value END ) as _shipping_postcode,
    max( CASE WHEN pm.meta_key = '_order_total' and p.ID = pm.post_id THEN pm.meta_value END ) as order_total,
    max( CASE WHEN pm.meta_key = '_order_tax' and p.ID = pm.post_id THEN pm.meta_value END ) as order_tax,
    max( CASE WHEN pm.meta_key = '_paid_date' and p.ID = pm.post_id THEN pm.meta_value END ) as paid_date,
    ( select group_concat( order_item_name separator '|' ) from wp_woocommerce_order_items where order_id = p.ID ) as order_items
from
    wp_posts p 
    join wp_postmeta pm on p.ID = pm.post_id
    join wp_woocommerce_order_items oi on p.ID = oi.order_id";
$post_id_results = $wpdb->get_results($post_id, ARRAY_A);



        foreach ($post_id_results as $post_id_results)
        {

			$order_total = $post_id_results['order_total'];
			$order_items = $post_id_results['order_items'];
	
	
		}?>
		<table>
		<tr>
			<td> Order Items</td>
			<td>Order Total</td>
		</tr>
			<?php echo '<tr>
			<td>'.$order_items.'</td> 		
			<td>'.$order_total.'</td> 
			</tr>';?>
		</table>
<?php
 //  print_r($post_id_results);
	

	//print_r($results);
array_values($post_id)[0];
}

//API Integration


// add_action('wp_enqueue_scripts','enque_parent_styles');
// function enque_parent_styles()
// {
//     // wp_enque_script('api-custom',get_template_directory_uri().'/js/custom_API.js',NULL,1.0,true);
//     wp_enqueue_script( 'api-custom', get_template_directory_uri() . '/js/myJS.js', NULL, 1.0, true );
   
//     wp_localize_script( 'api-custom', 'additionalaData', array(
//         'nonce' => wp_create_nonce( 'wordpress' ),
//         'siteURL' => site_url(),
//       ) );
// }

// add_action( 'wp_enqueue_scripts', 'enqueue_api_script' );

// function enqueue_api_script() {
//    wp_enqueue_script( 'fetchpost', get_template_directory_uri() . '/js/fetchpost.js', NULL, 1.0, true );
// }

// register_rest_route('wl/v1', 'posts', [
//     'methods' => 'GET',
//     'callback' => 'wl_posts',
// ]);
// function wl_posts() {
// return "hi";
// }


function theme_js_script() {
	//wp_enqueue_script( 'bootstrap-show-modal', get_template_directory_uri() . '/js/bootstrap-show-modal.js','','',true);
	//wp_enqueue_script( 'modal', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modal.min.js', array(), null, true );
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/new.js', array(), null, true );
	wp_localize_script( 'theme-script', 'ig2go_script_object',
        array( 
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'siteurl' => site_url()
        )
    );
}
add_action('wp_enqueue_scripts', 'theme_js_script');

// add_action('wp_enqueue_scripts','enque_parent_styles');
// function enque_parent_styles()
// {
//     // wp_enque_script('api-custom',get_template_directory_uri().'/js/custom_API.js',NULL,1.0,true);
//     wp_enqueue_script( 'new-js', get_template_directory_uri() . '/js/new.js', NULL, 1.0, true );
   
// }

function my_custom_post_hotel() {

    //labels array added inside the function and precedes args array
    
    $labels = array(
    'name' => _x( 'Hotels', 'post type general name' ),
    'singular_name' => _x( 'Hotel', 'post type singular name' ),
    'add_new' => _x( 'Add New', 'Hotel' ),
    'add_new_item' => __( 'Add New Hotel' ),
    'edit_item' => __( 'Edit Hotel' ),
    'new_item' => __( 'New Hotel' ),
    'all_items' => __( 'All Hotels' ),
    'view_item' => __( 'View Hotel' ),
    'search_items' => __( 'Search hotels' ),
    'not_found' => __( 'No hotels found' ),
    'not_found_in_trash' => __( 'No hotels found in the Trash' ),
    'parent_item_colon' => '',
    'menu_name' => 'Hotels'
    );

    // args array

$args = array(
    'labels' => $labels,
    'description' => 'Displays city hotels and their ratings',
    'public' => true,
    'menu_position' => 4,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive' => true,
    'show_in_rest' => true,
    );
    
    register_post_type( 'hotel', $args );
    }
    add_action( 'init', 'my_custom_post_hotel' );

    //registration of taxonomies

function my_taxonomies_hotel() {

    //labels array
    
    $labels = array(
    'name' => _x( 'Hotel Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Hotel Category', 'taxonomy singular name' ),
    'search_items' => __( 'Search Hotel Categories' ),
    'all_items' => __( 'All Hotel Categories' ),
    'parent_item' => __( 'Parent Hotel Category' ),
    'parent_item_colon' => __( 'Parent Hotel Category:' ),
    'edit_item' => __( 'Edit Hotel Category' ),
    'update_item' => __( 'Update Hotel Category' ),
    'add_new_item' => __( 'Add New Hotel Category' ),
    'new_item_name' => __( 'New Hotel Category' ),
    'menu_name' => __( ' Hotel Categories' ),
    );

    //args array

$args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'show_in_rest' => true,
    'rest_base' => 'Hotels',
    );
    
    register_taxonomy( 'hotel_category', 'hotel', $args );
    }
    
    add_action( 'init', 'my_taxonomies_hotel', 0 );

    add_action( 'rest_api_init', 'add_custom_fields' );
function add_custom_fields() {
register_rest_field(
'post', 
'custom_fields', //New Field Name in JSON RESPONSEs
array(
    'get_callback'    => 'get_custom_fields', // custom function name 
    'update_callback' => null,
    'schema'          => null,
     )
);
}

register_rest_field(array('post'), 'gb_author_name', array('get_callback' => 'gb_get_author_name'));

register_rest_field(array('post'), 'gb_feature_image', array('get_callback' => 'gb_get_featured_image'));





// include ccustom ffuncctions
include 'custom-functions/functions.php';

function get_custom_logo_url(){
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    return $image[0];
}

function ig2go_ajax_add_to_cart(){
	$product_id = absint($_POST['product_id']);
    $quantity = 1;
    $passed_validation = apply_filters('woocommerce_add_to_cart_validation', true, $product_id, $quantity);
    $product_status = get_post_status($product_id); 
	if ( $passed_validation && WC()->cart->add_to_cart( $product_id, $quantity ) && 'publish' === $product_status ) {
		do_action( 'woocommerce_ajax_added_to_cart', $product_id );

		$data = array(
			'error'       => 0,
			'success' => 1,
			'msg' => wc_print_notices( true )
		);	
	} else {
		// If there was an error adding to the cart, redirect to the product page to show any errors
		$data = array(
			'error'       => 1,
			'success' => 0,
			'msg' => wc_print_notices( true )
		);
	}
	wp_send_json( $data );

	die();

}
add_action('wp_ajax_nopriv_ig2go_ajax_add_to_cart', 'ig2go_ajax_add_to_cart');
add_action('wp_ajax_ig2go_ajax_add_to_cart', 'ig2go_ajax_add_to_cart');

function ig2go_ajax_update_cart(){
	global $woocommerce;
	$product_id = absint($_POST['product_id']);
    $quantity = absint($_POST['quantity']);

	foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $cart_item ) {
		if($cart_item['product_id'] == $product_id){
			$woocommerce->cart->set_quantity($cart_item_key, $quantity);
		}
	} 
}
add_action('wp_ajax_nopriv_ig2go_ajax_update_cart', 'ig2go_ajax_update_cart');
add_action('wp_ajax_ig2go_ajax_update_cart', 'ig2go_ajax_update_cart');

/**
 * ----------------------------------
 * ---------------------------------
 * --------Code start by ganesh ----------
 */







/**
 * Clover API Category Sync add/update function 
 */

 function getAllTermMeta()
 {
	global $wpdb;
	$key ="colver_category_id";
	return $wpdb->get_results($wpdb->prepare("SELECT term_id, meta_value from {$wpdb->termmeta} WHERE meta_key= '{$key}' "));

 }

 function getAllTermMetaById($key,$val)
 {
	if(!empty($key)):
		global $wpdb;
		return $wpdb->get_var($wpdb->prepare("SELECT term_id from {$wpdb->termmeta} WHERE meta_key= '{$key}' AND meta_value= '{$val}' "));
	endif;

 }

 
function AddUpdateItemCategoryProcess() {

	$term_meta_array = array();
	
	$post_datas = $_REQUEST['data'];
	$post_datas = $post_datas['elements'];
	//echo "<pre>";print_r($post_datas);echo "</pre>";
	//die();
	if(!empty($post_datas)):

		$get_term_meta = getAllTermMeta();
		$meta_counter=0;
		foreach($get_term_meta as $single_term_meta):
			$term_meta_array[$meta_counter]['id'] = $single_term_meta->meta_value;
			$term_meta_array[$meta_counter]['term_id'] = $single_term_meta->term_id;
		$meta_counter++;
		endforeach;

		foreach ($post_datas as $key => $val){

			$key = array_search($val['id'], array_column($term_meta_array, 'id'));
			
			if(!empty($key) || $key === 0){
				$term_id = $term_meta_array[$key]['term_id'];

				if(!empty($term_id)):
					$term_meta = wp_update_term(
						$term_id,
						'product_cat',
						array(
							'name' => $val['name'],
							'description'=> '',
							'slug' => strtolower($val['name'])
						)
					);
					update_term_meta($term_id, 'colver_category_id', $val['id'], true);
				endif;
				
			} 
			else
			{
					$term_meta = wp_insert_term( $val['name'], $taxonomy = 'product_cat');
					if (!get_term_meta($term_meta['term_id'], 'colver_category_id')) {
						add_term_meta($term_meta['term_id'], 'colver_category_id', $val['id'], true);
				
					}
					

			} 
		} 
	endif;
die();
}
add_action ( 'wp_ajax_' . 'AddUpdateItemCategory', 'AddUpdateItemCategoryProcess' );
add_action ( 'wp_ajax_nopriv_' . 'AddUpdateItemCategory', 'AddUpdateItemCategoryProcess' );


/**
 *  Declare function to check meta key exits or not
 */
function check_product_exist($key,$product_id) {
	global $wpdb;
	return $wpdb->get_var($wpdb->prepare("SELECT post_id from {$wpdb->postmeta} WHERE meta_key= '{$key}' AND meta_value = %s",$product_id));
}

/**
 *  Declare CURL Function to get ALL Modfiers based on Modifier Group
 */
function getAllModifiersbyModifiersId($groupId)
{
	$ch = curl_init();
    $token = '418ea562-5b81-7c91-df6a-26ba8c69aca6';
    $url = "https://api.clover.com/v3/merchants/EKCP62Z52H804/modifier_groups/".$groupId."/modifiers";
    $headers = array(
		"Content-Type: application/json; charset=utf-8",
		"Authorization: Bearer ".$token
	);
  
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 80);
       
    $response = curl_exec($ch);
        
    if(curl_error($ch)){
        echo 'Request Error:' . curl_error($ch);
    }else{
        return json_decode($response);
    }
       
    curl_close($ch);

	
}

/**
 * Clover API All Items sync add/update function
 */

function AddUpdateItemInventoriesProcess() {
	global $wpdb;
	/*$gpid = 'XCGXBKY69MAD6';
	$x = getAllModifiersbyModifiersId($gpid);
    echo "<pre>";print_r($x);echo "</pre>"; */
	$post_datas = $_REQUEST['responseData'];
	$post_datas = $post_datas['elements'];

	echo "<pre>";	print_r($post_datas); echo "</pre>";
	//die();

	/* serialized static data headers and footer */
	$sanitized_data_header = 'a:1:{i:0;a:16:{s:4:"name";s:7:"choices";s:12:"title_format";s:5:"label";s:18:"description_enable";i:0;s:11:"description";s:0:"";s:4:"type";s:8:"checkbox";s:7:"display";s:6:"select";s:8:"position";i:0;s:8:"required";i:0;s:12:"restrictions";i:0;s:17:"restrictions_type";s:8:"any_text";s:12:"adjust_price";i:0;s:10:"price_type";s:8:"flat_fee";s:5:"price";s:0:"";s:3:"min";d:0;s:3:"max";d:0;s:7:"options";';
	$sanitized_data_footer='}}}';
	
	$individual_modifiergroup_modifier = array();
	$description = "";
	$short_desc = "";
	$stock_status = 'instock';
	if(!empty($post_datas)):
		foreach ($post_datas as $key => $val){

			$clover_product_id = $val['id'];
			$product_name = $val['name'];
			$product_sku= $val['sku'];
			$product_price= $val['price'];
			$product_price_decimal = number_format((float)$product_price/100, 2, '.', '');
			$product_cost= $val['cost'];
			$product_cost_decimal = number_format((float)$product_cost/100, 2, '.', '');
			$product_pricetype= $val['priceType'];
			$defaultTaxRates= $val['defaultTaxRates'];
			$isRevenue= $val['isRevenue'];
			$stockCount= $val['stockCount'];
			$unitName= $val['unitName'];
			$available = $val['available'];

			if(!empty($product_sku) || $product_sku!='')
			{
			//echo "<pre>";print_r($val);echo "</pre>";
			
				// Already exists sku?
				$maybe_post_id = check_product_exist('_sku',$product_sku);
				$product_id = $maybe_post_id ? $maybe_post_id : 0;
				if($product_id > 0 ) {
					//echo "update";
					$update_args = array(
						'ID'           => $product_id,
						'post_title'   => $product_name,
						'post_content' => $description,
						'post_excerpt' => $short_desc,
					);
					wp_update_post( $update_args );

				} else {
					
					$args = array (
						'post_content' => $description,
						'post_title' => $product_name,
						'post_excerpt' => $short_desc,
						'post_status' => 'publish',
						'post_type' => 'product',
						);
						
						$product_id = wp_insert_post($args);
				}

				/* modifier group sync process */
				if(!empty($val['modifierGroups'])): 
					$p=0;
					foreach($val['modifierGroups'] as $modifier):
						$modifiers_group_data='';
						foreach($modifier as $key=>$vallue):
							/* Calling function to get modifiers based on modifier group ids */
							$individual_modifiergroup_modifier = getAllModifiersbyModifiersId($vallue['id']);
							$modifiers_group_data .=$vallue['id'].","; /* assigned modifier group ids */
							$repeated_data='';
							$modifiers_data='';
							$k=0;
							$mod_index=1;
							$modifiers_meta=array();
							foreach($individual_modifiergroup_modifier->elements as $value):
								
								//echo "<pre>";print_r($value);echo "</pre>";
								$ItemModifierId = $value->id;
								$ItemModifierName = $value->name;
								$CItemModifierName = strlen($ItemModifierName);
								$ItemModifierPrice = number_format((float)$value->price/100, 2, '.', '');
								$CItemModifierPrice = strlen($ItemModifierPrice);
								$modifiers_data .= $ItemModifierId.","; /* Assiged modifiers id */
								$repeated_data .= 'i:'.$k.';a:4:{s:5:"label";s:'.$CItemModifierName.':"'.$ItemModifierName.'";s:5:"price";s:'.$CItemModifierPrice.':"'.$ItemModifierPrice.'";s:5:"image";s:0:"";s:10:"price_type";s:14:"quantity_based";}';
								//update_post_meta($product_id, '_modifiers_id_index_'.$mod_index,$ItemModifierId);
								
								$modifiers_meta[$k]['value'] =  $ItemModifierName;
								$modifiers_meta[$k]['id'] =  $ItemModifierId;
								
								$k++;
								$mod_index++;
							endforeach;
							$sanitized_data_counter = 'a:'.$k.':{';
							$imported_data = $sanitized_data_header.$sanitized_data_counter.$repeated_data.$sanitized_data_footer; 
							update_post_meta($product_id, '_product_addons',$imported_data);
							$wpdb->query($wpdb->prepare("UPDATE $wpdb->postmeta SET meta_value='$imported_data' WHERE meta_key='_product_addons' AND post_id=$product_id"));
							update_post_meta($product_id, '_modifiers_id',serialize($modifiers_meta)); /* Save modifiers id */
							
						endforeach;
						update_post_meta($product_id, '_modifiers_group_id',rtrim($modifiers_group_data, ',')); /* Save modifier group id */
					endforeach;	
				endif;

				if(!empty($val['categories'])):
					$category_array = array(); 
					//echo "<pre>";print_r($val['categories']['elements']);echo "</pre>";die();
					foreach($val['categories']['elements'] as $single_item_category):
							$clover_cat_id = $single_item_category['id'];
							$cat_term_id = getAllTermMetaById('colver_category_id',$clover_cat_id);
							$category_array[] = intVal($cat_term_id);
					endforeach;
					$x = add_terms_to_product($product_id,$category_array);
				endif;

				/* get updated stock */
				//$get_updated_stock_response = SyncCloverApiGetItemsStock($clover_product_id);

				echo "<pre>"; print_r($get_updated_stock_response); echo "</pre>";

				/* update post meta during product creation or updation */

				update_post_meta($product_id, 'clover_item_id',$clover_product_id);
				update_post_meta($product_id, 'priceType',$product_pricetype);
				update_post_meta($product_id, 'defaultTaxRates',$defaultTaxRates);
				update_post_meta($product_id, 'unitName',$unitName);
				update_post_meta($product_id, '_sku',$product_sku);
				update_post_meta($product_id, '_price',$product_price_decimal);
				update_post_meta($product_id, '_regular_price',$product_price_decimal);
				update_post_meta($product_id, 'cost',$product_cost_decimal);
				update_post_meta($product_id, 'available',$available);
				
					/*update_post_meta($product_id, 'clover_item_id',$clover_product_id);
					update_post_meta($product_id, 'priceType',$product_pricetype);
					update_post_meta($product_id, 'defaultTaxRates',$defaultTaxRates);
					update_post_meta($product_id, 'unitName',$unitName);
					update_post_meta($product_id, '_sku',$product_sku);
					update_post_meta($product_id, '_price',$product_price_decimal);
					update_post_meta($product_id, '_regular_price',$product_price_decimal);
					update_post_meta($product_id, 'cost',$product_cost_decimal);
					update_post_meta($product_id, 'available',$available);
					if($stockCount>0):
						update_post_meta($product_id, '_stock',$stockCount);
						update_post_meta($product_id, '_stock_status',$stock_status);
						update_post_meta($product_id, '_manage_stock','yes');	
					else:
						update_post_meta($product_id, '_stock',$stockCount);
						update_post_meta($product_id, '_stock_status','outofstock');
						update_post_meta($product_id, '_manage_stock','yes');
					endif;*/

					/* updated stock */

				

					

			}
		}
	endif;
    die();
}
add_action ( 'wp_ajax_' . 'AddUpdateItemInventories', 'AddUpdateItemInventoriesProcess' );
add_action ( 'wp_ajax_nopriv_' . 'AddUpdateItemInventories', 'AddUpdateItemInventoriesProcess' );


/**    
 * Clover API Modifier Group Sync function for Add/Update 
*/

function AddUpdateItemModifiersGroupsProcess() {

	$post_datas = $_REQUEST['responseData'];
	$post_datas = $post_datas['elements'];
	//print_r($post_datas);die();
	if(!empty($post_datas)):
		foreach ($post_datas as $key => $val){
			
			$modifierGroupID = $val[id];
			$modifierGroupName = $val['name'];
			$modiferGroupUniqueID = $val['modifierIds'];

				// Already exists modifier group id?
				$maybe_post_id = check_product_exist('modifierGroupID',$modifierGroupID);
				$product_id = $maybe_post_id ? $maybe_post_id : 0;
				if($product_id > 0 ) {
					echo "update";
					$update_args = array(
						'ID'           => $product_id,
						'post_title' => $modifierGroupName,
						'post_status' => 'publish',
						'post_type' => 'global_product_addon',
					);
					wp_update_post( $update_args );

				} else {
					echo "insert";
					$args = array (
						'post_title' => $modifierGroupName,
						'post_status' => 'publish',
						'post_type' => 'global_product_addon',
						);
						
						$product_id = wp_insert_post($args);
				}	

				/* update modifier group post meta */
				update_post_meta($product_id, 'modifierGroupID',$modifierGroupID);
				update_post_meta($product_id, '_all_products',0);
				update_post_meta($product_id, '_priority',10); 
				update_post_meta($product_id, '_product_addons','a:0:{}');
		}
	endif;
	die();
}
add_action ( 'wp_ajax_' . 'AddUpdateItemModifiersGroups', 'AddUpdateItemModifiersGroupsProcess' );
add_action ( 'wp_ajax_nopriv_' . 'AddUpdateItemModifiersGroups', 'AddUpdateItemModifiersGroupsProcess' );


/**    
 * Clover API Modifier Sync function for Add/Update 
 */

function AddUpdateItemModifiersProcess() {

	$post_datas = $_REQUEST['responseData'];
	$post_datas = $post_datas['elements'];
	//print_r($post_datas);die();
    global $wpdb;
	$sanitized_data_header = 'a:1:{i:0;a:16:{s:4:"name";s:7:"choices";s:12:"title_format";s:5:"label";s:18:"description_enable";i:0;s:11:"description";s:0:"";s:4:"type";s:8:"checkbox";s:7:"display";s:6:"select";s:8:"position";i:0;s:8:"required";i:0;s:12:"restrictions";i:0;s:17:"restrictions_type";s:8:"any_text";s:12:"adjust_price";i:0;s:10:"price_type";s:8:"flat_fee";s:5:"price";s:0:"";s:3:"min";d:0;s:3:"max";d:0;s:7:"options";';
	$sanitized_data_footer='}}}';
	$i=0;
	if(!empty($post_datas)):
		foreach ($post_datas as $key => $val){
			$group_id = $val['modifierGroup']['id'];
			$post_data = $wpdb->get_results( "select post_id,meta_key,meta_value from $wpdb->postmeta where meta_key='modifierGroupID' AND meta_value = '$group_id'", ARRAY_A );
			$name = $val['name'];
			$cname = strlen($name);
			$price = $val['price'];
			$cprice = strlen($price);
			$post_id = $post_data[0]['post_id'];
			$id = $val['id'];
			$available = $val['available'];

			$arr1[$i]['name'] = $name;
			$arr1[$i]['price'] = $price;
			$arr1[$i]['gid'] = $group_id;
			$arr1[$i]['post_id'] = $post_id;
			$arr1[$i]['id'] = $id;
			$arr1[$i]['available'] = $available;
			$i++;
		
		}

		if(!empty($arr1)):
			$ganesh_arr=array();
			foreach($arr1 as $b)
			{
				$ganesh_arr[]=$b['gid'];		
			}
			$my_new_arr=array();
			$j=0;
			foreach($arr1 as $a)
			{
				if(in_array($a['gid'],$ganesh_arr))
				{
					$my_new_arr[$a['gid']][]=$a;
					$j++;	
				}
			}
		endif;

		if(!empty($my_new_arr)):
			$imported_data='';
			foreach($my_new_arr as $key=>$single_array)
			{
				$k=0;
				$repeated_data='';
				foreach($my_new_arr[$key] as $value):
					$option_name = $value['name'];
					$c_option_name = strlen($option_name);
					$option_price = number_format((float)$value['price']/100, 2, '.', '');
					$c_option_price = strlen($option_price);
					$repeated_data .= 'i:'.$k.';a:4:{s:5:"label";s:'.$c_option_name.':"'.$option_name.'";s:5:"price";s:'.$c_option_price.':"'.$option_price.'";s:5:"image";s:0:"";s:10:"price_type";s:14:"quantity_based";}';
					$post_id = $value['post_id'];
				$k++;
				endforeach;
				$sanitized_data_counter = 'a:'.$k.':{';
				$imported_data = $sanitized_data_header.$sanitized_data_counter.$repeated_data.$sanitized_data_footer;
				$wpdb->query($wpdb->prepare("UPDATE $wpdb->postmeta SET meta_value='$imported_data' WHERE meta_key='_product_addons' AND post_id=$post_id"));
				$repeated_data="";
			}

		endif;
	endif; 
	die();
}
add_action ( 'wp_ajax_' . 'AddUpdateItemModifiers', 'AddUpdateItemModifiersProcess' );
add_action ( 'wp_ajax_nopriv_' . 'AddUpdateItemModifiers', 'AddUpdateItemModifiersProcess' );



/* save data in cart item */

/*function save_value_on_product_details_form( $cart_item_data, $product_id ) {
	
	$cart_item_data[ 'mod_id' ] = get_post_meta($product_id,"_modifiers_id",true);
	$cart_item_data['unique_key'] = md5( microtime().rand() );
	
    
   return $cart_item_data;
}

add_action( 'woocommerce_add_cart_item_data', 'save_value_on_product_details_form', 10, 2 );

function render_meta_on_cart_and_checkout( $cart_data, $cart_item = null ) {

	$custom_items = array();

    if( !empty( $cart_data ) ) {
        $custom_items = $cart_data;
    }
	if( isset( $cart_item['mod_id'] ) ) {
        if($cart_item['mod_id']!="")
        {
			$s_f_size_arr =$cart_item['mod_id'];
			$custom_items[] = array( "name" => 'mod_id', "value" => $s_f_size_arr);
        }
    }

	return $custom_items;
}
add_filter( 'woocommerce_get_item_data', 'render_meta_on_cart_and_checkout', 10, 2 );


function product_form_order_meta_handler( $item_id, $values, $cart_item_key ) {
	
	if( isset( $values['mod_id'] ) ) {
		$s_f_size_arr = $values['mod_id'];
        wc_add_order_item_meta( $item_id, "mod_id", $s_f_size_arr);
    }
	
}

add_action( 'woocommerce_add_order_item_meta', 'product_form_order_meta_handler', 1, 3 );

*/

/**
 *  Order processed  
 */ 

add_action('woocommerce_thankyou', 'CloverApiOrderPlaced', 10, 1);

function CloverApiOrderPlaced( $order_id ) {
	
	$order_collection_data = array();
	//	echo $order_id.'ganesh';

	$order = wc_get_order( $order_id );

	$order_data = $order->get_data(); // The Order data

	//echo "<pre>";print_r($order_data);echo "</pre>";

	$order_id = $order_data['id'];
	$order_parent_id = $order_data['parent_id'];
	$order_status = $order_data['status'];
	$order_currency = $order_data['currency'];
	$order_version = $order_data['version'];
	$order_payment_method = $order_data['payment_method'];
	$order_payment_method_title = $order_data['payment_method_title'];
	$pickup_date = get_post_meta($order_id, 'pi_system_delivery_date',true);
	$pickup_time = get_post_meta($order_id, 'pi_delivery_time',true);
	$order_type = get_post_meta($order_id, 'pi_delivery_type',true);
	$customer_notes = $order_data['customer_note'];
	$order_collection_data['payment'] = array(
		'order_id' => $order_id,
		'order_parent_id' => $order_parent_id,
		'order_status' => $order_status,
		'order_currency' => $order_currency,
		'order_version' => $order_version,
		'order_payment_method' => $order_payment_method,
		'order_payment_method_title' => $order_payment_method_title,
		'notes' => $customer_notes

	); 


	## get user data ##
	$user_id   = $order->get_user_id(); // Get the costumer ID
	$user      = $order->get_user(); // Get the WP_User object

	$order_collection_data['user_data'] = array(
		'user_id' => $user_id,
		'user_information' => $user
	); 

	## Creation and modified WC_DateTime Object date string ##

	// Using a formated date ( with php date() function as method)
	$order_date_created = $order_data['date_created']->date('Y-m-d H:i:s');
	$order_date_modified = $order_data['date_modified']->date('Y-m-d H:i:s');

	// Using a timestamp ( with php getTimestamp() function as method)
	$order_timestamp_created = $order_data['date_created']->getTimestamp();
	$order_timestamp_modified = $order_data['date_modified']->getTimestamp();

	$order_collection_data['order_date_details'] = array(
		'created_date' => $order_date_created,
		'modified_date' => $order_date_modified
	);

	$order_discount_total = $order_data['discount_total'];
	$order_discount_tax = $order_data['discount_tax'];
	$order_shipping_total = $order_data['shipping_total'];
	$order_shipping_tax = $order_data['shipping_tax'];
	$order_cart_tax = $order_data['cart_tax'];
	$order_total_tax = $order_data['total_tax'];
	$order_customer_id = $order_data['customer_id']; // ... and so on
	$order_sub_total = $order_data['total'];
	$order_key = $order_data['order_key'];

	$order_collection_data['price_information'] = array(
		'order_discount_total' => $order_discount_total,
		'order_discount_tax' => $order_discount_tax,
		'order_shipping_total' => $order_shipping_total,
		'order_shipping_tax' => $order_shipping_tax,
		'order_cart_tax' => $order_cart_tax,
		'order_total_tax' => $order_total_tax,
		'order_customer_id' => $order_customer_id,
		'order_subtotal' => $order_sub_total,
		'order_key' => $order_key
	); 

	## BILLING INFORMATION:

	$order_billing_first_name = $order_data['billing']['first_name'];
	$order_billing_last_name = $order_data['billing']['last_name'];
	$order_billing_company = $order_data['billing']['company'];
	$order_billing_address_1 = $order_data['billing']['address_1'];
	$order_billing_address_2 = $order_data['billing']['address_2'];
	$order_billing_city = $order_data['billing']['city'];
	$order_billing_state = $order_data['billing']['state'];
	$order_billing_postcode = $order_data['billing']['postcode'];
	$order_billing_country = $order_data['billing']['country'];
	$order_billing_email = $order_data['billing']['email'];
	$order_billing_phone = $order_data['billing']['phone'];

	/*$order_collection_data['billing_information'] = array(
		'order_billing_first_name' => $order_billing_first_name,
		'order_billing_last_name' => $order_billing_last_name,
		'order_billing_company' => $order_billing_company,
		'order_billing_address_1' => $order_billing_address_1,
		'order_billing_address_2' => $order_billing_address_2,
		'order_billing_city' => $order_billing_city,
		'order_billing_state' => $order_billing_state,
		'order_billing_postcode' => $order_billing_postcode,
		'order_billing_country' => $order_billing_country,
		'order_billing_email' => $order_billing_email,
		'order_billing_phone' => $order_billing_phone
	); */

	## SHIPPING INFORMATION:

	/*$order_shipping_first_name = $order_data['shipping']['first_name'];
	$order_shipping_last_name = $order_data['shipping']['last_name'];
	$order_shipping_company = $order_data['shipping']['company'];
	$order_shipping_address_1 = $order_data['shipping']['address_1'];
	$order_shipping_address_2 = $order_data['shipping']['address_2'];
	$order_shipping_city = $order_data['shipping']['city'];
	$order_shipping_state = $order_data['shipping']['state'];
	$order_shipping_postcode = $order_data['shipping']['postcode'];
	$order_shipping_country = $order_data['shipping']['country'];

	$order_collection_data['shipping_information'] = array(
		'order_shipping_first_name' => $order_shipping_first_name,
		'order_shipping_last_name' => $order_shipping_last_name,
		'order_shipping_company' => $order_shipping_company,
		'order_shipping_address_1' => $order_shipping_address_1,
		'order_shipping_address_2' => $order_shipping_address_2,
		'order_shipping_city' => $order_shipping_city,
		'order_shipping_state' => $order_shipping_state,
		'order_shipping_postcode' => $order_shipping_postcode,
		'order_shipping_country' => $order_shipping_country
	); */ 

	$items = $order->get_items();
	$item_counter=1;
	foreach ( $items as $item_id => $item ) {
		$product        = $item->get_product();
		$active_price   = $product->get_price(); // The product active raw price
		$regular_price  = $product->get_sale_price(); // The product raw sale price
		$sale_price     = $product->get_regular_price(); // The product raw regular price
		//echo "<pre>";print_r($item);echo "</pre>";
		$product_id = $item->get_product_id();
		$variation_id = $item->get_variation_id();
		$product = $item->get_product(); // see link above to get $product info
		$product_name = $item->get_name();
		$quantity = $item->get_quantity();
		$subtotal = $item->get_subtotal();
		$total = $item->get_total();
		$tax = $item->get_subtotal_tax();
		$tax_class = $item->get_tax_class();
		$tax_status = $item->get_tax_status();
		$allmeta = $item->get_meta_data();
		//$clover_product_id = $item->get_meta( 'clover_product_id', true );
		$clover_item_id = get_post_meta( $product_id,'clover_item_id', true );
		$clover_modifier_group_id = get_post_meta( $product_id,'_modifiers_group_id', true );
		$clover_modifier_id = unserialize(get_post_meta( $product_id,'_modifiers_id', true ));
		$item_type = $item->get_type(); // e.g. "line_item"
			
		$order_collection_data['ordered_items_data']['item'.$item_counter]['product_id'] = $product_id;
		$order_collection_data['ordered_items_data']['item'.$item_counter]['variation_id'] = $variation_id;
		$order_collection_data['ordered_items_data']['item'.$item_counter]['product_name'] = $product_name;
		$order_collection_data['ordered_items_data']['item'.$item_counter]['qty'] = $quantity;
		$order_collection_data['ordered_items_data']['item'.$item_counter]['active_price'] = $active_price;
		$order_collection_data['ordered_items_data']['item'.$item_counter]['regular_price'] = $regular_price;
		$order_collection_data['ordered_items_data']['item'.$item_counter]['sale_price'] = $sale_price;
		$order_collection_data['ordered_items_data']['item'.$item_counter]['subtotal'] = $subtotal;
		$order_collection_data['ordered_items_data']['item'.$item_counter]['total'] = $total;
		$order_collection_data['ordered_items_data']['item'.$item_counter]['tax'] = $tax;
		$order_collection_data['ordered_items_data']['item'.$item_counter]['tax_class'] = $tax_class;
		$order_collection_data['ordered_items_data']['item'.$item_counter]['tax_status'] = $tax_status;
		$order_collection_data['ordered_items_data']['item'.$item_counter]['item_type'] = $item_type;
		$order_collection_data['ordered_items_data']['item'.$item_counter]['clover_item_id'] = $clover_item_id;
		$order_collection_data['ordered_items_data']['item'.$item_counter]['clover_modifier_group_id'] = $clover_modifier_group_id;
		$order_collection_data['ordered_items_data']['item'.$item_counter]['clover_modifier_id'] = $clover_modifier_id;

		if(!empty($allmeta)):
			$l=0;
			$meta_option_key = '_modifiers_id_index_';
			foreach($allmeta as $metakey => $metavalue):
			//echo "<pre>"; print_r($metavalue); echo "</pre>";
			//echo $metavalue->id.'-'.$metavalue->key.'-'.$metavalue->value.'<br>';
			$order_collection_data['ordered_items_data']['item'.$item_counter]['add_on_meta'][$l]['option_id'] = $metavalue->id;
			$order_collection_data['ordered_items_data']['item'.$item_counter]['add_on_meta'][$l]['name'] = $metavalue->key;
			$order_collection_data['ordered_items_data']['item'.$item_counter]['add_on_meta'][$l]['value'] = $metavalue->value;
			$l++;
			endforeach;
		endif;

		//$order_collection_data['ordered_items_data']['meta_data'] = $allmeta;
		//echo "<pre>";print_r($item);echo "</pre>";
		$item_counter++;
	}
	

    $modifier_items_value = array();
	$mod_counter=0;

	/* stored modifiers id in array */
	foreach($order_collection_data['ordered_items_data'] as $single_ordered_items_data):
		//echo "<pre>";print_r($single_item_meta);echo "</pre>";
		foreach($single_ordered_items_data['clover_modifier_id'] as $single_clover_modifier_meta):
			$modifier_items_value[$mod_counter]['value'] = $single_clover_modifier_meta['value'];
			$modifier_items_value[$mod_counter]['id'] = $single_clover_modifier_meta['id'];
			$mod_counter++;
		endforeach;
	endforeach;
	/* stored modifiers id in array end */


	

	/* merchant data */
	$merchant_id       = "EKCP62Z52H804";
	$access_token = "418ea562-5b81-7c91-df6a-26ba8c69aca6";
	$employee_id       = "8PTNTYMFAPERR"; // kaustubh
	$title             = 'Online order '.$order_type;
	$notes = $order_type.': '.$pickup_date.':'.$pickup_time;
	$currency          = "USD";
	$state             = "Open";
	$groupLineItems    = "false";
	$manualTransaction = "false";
	$testMode          = "false";
	$taxRemoved        = "false";
	$isVat        	   = "false";

	$cash_tender_id = "DW9PK76ERJ4Z6";
	$credit_card_tender_id = "8C24HM69YH2QC";
	$check_tender_id ="58Z4PQKNP14EG";
	$external_gift_card_tender_id ="H4ZC9PBNPS2JJ";
	$LevelUp_tender_id = "QJZKV2FX57YBJ";
	$external_payment_tender_id = "4YJRSQPWD5DXY";
	$giftcard_tender_id = "ZGJHJTN6FN11P";
	$external_pin_debit = "Y5VCD786G0GK0";
	$debit_card_tender_id ="GRAR6D7VFQNZ0";
	$eat24_integration_tender_id ="YZE3KRD1450H0";
	$validator_ce_tender_id ="TK7T64054EB5G";

	
	/* main loop starts from here */


		/* payment data */
		//$order_collection_data['payment'];
		/* end payment data */

		/* Order date data */
			//$order_collection_data['order_date_details'];

		/* order price information */
		//$order_collection_data['price_information'];

		/* order billing information */
		//$order_collection_data['billing_information'];


		/* total amount when ordered */
		if($order_sub_total):

			$totalAmount=$order_sub_total*100; // convert decimal to integer
		endif;

	/* Creating order in clover api */


	$result   = createOrder($merchant_id, $access_token, $employee_id, $title, $notes,$currency, $state, $groupLineItems, $manualTransaction, $testMode, $taxRemoved,$isVat,$totalAmount);
	$order_id = $result->id;
	//$order_id = "018HBX36H4PNJ";
	if(!empty($order_id)): 
        /* ordered items data */
        foreach($order_collection_data['ordered_items_data'] as $single_ordered_items):
                $item_id = $single_ordered_items['clover_item_id'];
                $itemQty = $single_ordered_items['qty'];
                $itemQty = $itemQty*1000;
                /* add line items to clove order */
                $line_items_result = createOrderLineItem($merchant_id, $access_token, $order_id, $item_id,$itemQty);

                $orderId     = $line_items_result->orderRef->id; // actual order id
                $line_item_id = $line_items_result->id; // actual line_item id

				echo "<pre>";print_r($line_items_result);echo "</pre>";
                
            foreach($single_ordered_items['add_on_meta'] as $single_add_on_meta):
                $key = array_search($single_add_on_meta['value'], array_column($modifier_items_value, 'value'));
                if(!empty($key) || $key === 0){
                    $modifier_id = $modifier_items_value[$key]['id'];
                    /* added modifiers to respective line items */
                    $modifiers_results = createOrderModifiersOfLineItem($merchant_id, $access_token, $order_id, $line_item_id,$modifier_id);
					//echo $modifier_items_value[$key]['id']; 

					echo "<pre>";print_r($modifiers_results);echo "</pre>";
                }  
            endforeach;
        endforeach;
    
        
    
        /* customer data setup */
        if($order_collection_data['user_data']):
            $get_user_id = $order_collection_data['user_data']['user_id'];
        endif;
        
        /* Checking if customer has unique customer id on clover api */
        $check_user_customer_id = get_user_meta( $get_user_id, '_customer_unique_id', true );
        if(!empty($check_user_customer_id) || $check_user_customer_id!=""):
            $customer_status = updateCustomerOnCloverApi($merchant_id,$access_token,$check_user_customer_id,$order_billing_first_name,$order_billing_last_name,$order_billing_company,$order_billing_address_1,$order_billing_address_2,$order_billing_city,$order_billing_state,$order_billing_postcode,$order_billing_country,$order_billing_email,$order_billing_phone);
        else:
            $customer_status = createCustomerOnCloverApi($merchant_id,$access_token,$order_billing_first_name,$order_billing_last_name,$order_billing_company,$order_billing_address_1,$order_billing_address_2,$order_billing_city,$order_billing_state,$order_billing_postcode,$order_billing_country,$order_billing_email,$order_billing_phone);
        endif;
        
        $update_user_status = update_user_meta( $get_user_id, "_customer_unique_id", $customer_status->id);
        $customer_ref_on_order = AsignedCustomertoOrderOnCloverApi($merchant_id,$access_token,$order_id,$customer_status->id,$totalAmount);

		echo "<pre>";print_r($customer_ref_on_order);echo "</pre>";

        $payment_data = createPaymentForOrder($merchant_id,$access_token,$cash_tender_id,$order_id,$totalAmount);
		//$payment_data = createPaymentOnOrderCloverApiCURL($merchant_id,$access_token,$cash_tender_id,$order_id,$totalAmount);
		
        print_r($payment_data);
        
    else:
        echo "Order not creating";
    endif; 

	echo "Hi admin your clover id =".$order_id."is Successfully created";

		
		

	/* Order creation finished and order id is generated */

	//echo "<pre>";print_r($order_collection_data);echo "</pre>";

//echo "<pre>";print_r($order_data);echo "</pre>";

	//echo "order successfully created. Order Id is- " . $orderId;

}


// Atomic order 
function createOrderModifiedCodex($merchant_id, $access_token, $employee_id, $title,$notes, $currency, $state, $groupLineItems, $manualTransaction, $testMode, $taxRemoved,$isVat,$totalAmt)
{
	$curl = curl_init("https://sandbox.dev.clover.com/v3/merchants/".$merchant_id."/atomic_order/orders");

	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        
        "Authorization:Bearer " . $access_token,
        'Content-Type: application/json'
    ));

	$data = '
	{
		"employee": {
			 "id": "'.$employee_id.'"
		},
		"orderType": {
			 "taxable": "true",
			 "isDefault": "false",
			 "filterCategories": "false",
			 "isHidden": "true",
			 "hoursAvailable": "ALL",
			 "isDeleted": "false",
			 "id": "NKPQJQJKDH9AF",
			 "label": "In-store Pickup"
		},
		"taxRemoved": "' . $taxRemoved . '",
		"currency": "' . $currency . '",
		"isVat":"'.$isVat.'",
		"testMode": "' . $testMode . '",
		"state": "' . $state . '",
		"groupLineItems": "' . $groupLineItems . '",
		"manualTransaction": "' . $manualTransaction . '",
		"total": '.$totalAmt.',
		"title": "' . $title . '",
		"note": "'.$notes.'"
   }
	';

	curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $auth = curl_exec($curl);
    $info = curl_getinfo($curl);
    $order_detail = json_decode($auth);
    
    return $order_detail;

}


function createOrder($merchant_id, $access_token, $employee_id, $title,$notes, $currency, $state, $groupLineItems, $manualTransaction, $testMode, $taxRemoved,$isVat,$totalAmt)
{
	$curl = curl_init("https://api.clover.com/v3/merchants/".$merchant_id."/orders");

	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        
        "Authorization:Bearer " . $access_token,
        'Content-Type: application/json'
    ));

	$data = '
	{
		"employee": {
			 "id": "'.$employee_id.'"
		},
		"orderType": {
			 "taxable": "true",
			 "isDefault": "false",
			 "filterCategories": "false",
			 "isHidden": "true",
			 "hoursAvailable": "ALL",
			 "isDeleted": "false",
			 "id": "NKPQJQJKDH9AF",
			 "label": "In-store Pickup"
		},
		"taxRemoved": "' . $taxRemoved . '",
		"currency": "' . $currency . '",
		"isVat":"'.$isVat.'",
		"testMode": "' . $testMode . '",
		"state": "' . $state . '",
		"groupLineItems": "' . $groupLineItems . '",
		"manualTransaction": "' . $manualTransaction . '",
		"total": '.$totalAmt.',
		"title": "' . $title . '",
		"note": "'.$notes.'"
   }
	';

	curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $auth = curl_exec($curl);
    $info = curl_getinfo($curl);
    $order_detail = json_decode($auth);
    
    return $order_detail;

}


function createOrderLineItem($merchant_id, $access_token, $order_id, $item_id,$itemQty)
{
    $curl = curl_init('https://api.clover.com/v3/merchants/'.$merchant_id.'/orders/'.$order_id.'/line_items');
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        
        "Authorization:Bearer " . $access_token,
        'Content-Type: application/json'
    ));
	$data = '
	{
		"item": {
			"id": "' . $item_id . '"
		},
		"printed": true,
		"exchanged": "false",
		"refunded": "false",
		"refund": {
			 "transactionInfo": {
				  "isTokenBasedTx": "false",
				  "emergencyFlag": "false"
			 }
		},
		"isRevenue": "false",
		"unitQty": "' . $itemQty . '"
   }
	';

    
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $auth           = curl_exec($curl);
    $info           = curl_getinfo($curl);
    $order_lineItem = json_decode($auth);
    return $order_lineItem;
}

function createOrderModifiersOfLineItem($merchant_id, $access_token, $order_id, $line_item_id,$modifier_id)
{
    $curl = curl_init('https://api.clover.com/v3/merchants/'.$merchant_id.'/orders/'.$order_id.'/line_items/'.$line_item_id.'/modifications');
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        
        "Authorization:Bearer " . $access_token,
        'Content-Type: application/json'
    ));
	$data = '
	{
		"modifier": {
			"available": "true",
			"id": "' .$modifier_id. '"
	   }
   }
	';

    
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $auth           = curl_exec($curl);
    $info           = curl_getinfo($curl);
    $order_lineItem = json_decode($auth);
    return $order_lineItem;
}



function createCustomerOnCloverApi($merchant_id,$access_token,$order_billing_first_name,$order_billing_last_name,$order_billing_company,$order_billing_address_1,$order_billing_address_2,$order_billing_city,$order_billing_state,$order_billing_postcode,$order_billing_country,$order_billing_email,$order_billing_phone)
{
	$curl = curl_init('https://api.clover.com/v3/merchants/'.$merchant_id.'/customers');
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        
        "Authorization:Bearer " . $access_token,
        'Content-Type: application/json'
    ));
	$data = '
	{
		"addresses": [
			 {
				  "address1": "'.$order_billing_address_1.'",
				  "address2": "'.$order_billing_address_2.'",
				  "address3": "'.$order_billing_address_2.'",
				  "city": "'.$order_billing_city.'",
				  "country": "'.$order_billing_country.'",
				  "phoneNumber": "'.$order_billing_phone.'",
				  "state": "'.$order_billing_state.'",
				  "zip": "'.$order_billing_postcode.'"
			 }
		],
		"emailAddresses": [
			 {
				  "emailAddress": "'.$order_billing_email.'",
				  "primaryEmail": true
			 }
		],
		"phoneNumbers": [
			 {
				  "phoneNumber": "'.$order_billing_phone.'"
			 }
		],
		"cards": [
			 {
				  "first6": "gane",
				  "last4": "kuma",
				  "firstName": "gan",
				  "lastName": "kumar",
				  "expirationDate": "10",
				  "cardType": "visa",
				  "token": "4646545",
				  "tokenType": "MULTIPAY"
			 }
		],
		"firstName": "'.$order_billing_first_name.'",
		"lastName": "'.$order_billing_last_name.'",
		"marketingAllowed": true
   }
	';

    
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $auth           = curl_exec($curl);
    $info           = curl_getinfo($curl);
    $order_customer_information = json_decode($auth);
    return $order_customer_information;

}


function updateCustomerOnCloverApi($merchant_id,$access_token,$customer_id,$order_billing_first_name,$order_billing_last_name,$order_billing_company,$order_billing_address_1,$order_billing_address_2,$order_billing_city,$order_billing_state,$order_billing_postcode,$order_billing_country,$order_billing_email,$order_billing_phone)
{
	$curl = curl_init('https://api.clover.com/v3/merchants/'.$merchant_id.'/customers/'.$customer_id);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        
        "Authorization:Bearer " . $access_token,
        'Content-Type: application/json'
    ));
	$data = '
	{
		"addresses": [
			 {
				  "address1": "'.$order_billing_address_1.'",
				  "address2": "'.$order_billing_address_2.'",
				  "address3": "'.$order_billing_address_2.'",
				  "city": "'.$order_billing_city.'",
				  "country": "'.$order_billing_country.'",
				  "phoneNumber": "'.$order_billing_phone.'",
				  "state": "'.$order_billing_state.'",
				  "zip": "'.$order_billing_postcode.'"
			 }
		],
		"emailAddresses": [
			 {
				  "emailAddress": "'.$order_billing_email.'",
				  "primaryEmail": true
			 }
		],
		"phoneNumbers": [
			 {
				  "phoneNumber": "'.$order_billing_phone.'"
			 }
		],
		"cards": [
			 {
				  "first6": "gane",
				  "last4": "kuma",
				  "firstName": "gan",
				  "lastName": "kumar",
				  "expirationDate": "10",
				  "cardType": "visa",
				  "token": "4646545",
				  "tokenType": "MULTIPAY"
			 }
		],
		"firstName": "'.$order_billing_first_name.'",
		"lastName": "'.$order_billing_last_name.'",
		"marketingAllowed": true
   }
	';

    
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $auth           = curl_exec($curl);
    $info           = curl_getinfo($curl);
    $order_customer_information = json_decode($auth);
    return $order_customer_information;

}

function AsignedCustomertoOrderOnCloverApi($merchant_id,$access_token,$order_id,$customer_id,$totalAmount)
{
	$curl = curl_init('https://api.clover.com/v3/merchants/'.$merchant_id.'/orders/'.$order_id);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        
        "Authorization:Bearer " . $access_token,
        'Content-Type: application/json'
    ));
	$data = '
	{
		"customers": [
			 {
				  "id": "'.$customer_id.'",
				  "marketingAllowed": true
			 }
		],
		"orderType": {
			 "taxable": "false",
			 "isDefault": "false",
			 "filterCategories": "false",
			 "isHidden": "false",
			 "isDeleted": "false"
		},
		"taxRemoved": "false",
		"total": '.$totalAmount.',
		"paymentState": "OPEN"
   }
	';

    
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $auth           = curl_exec($curl);
    $info           = curl_getinfo($curl);
    $order_lineItem = json_decode($auth);
    return $order_lineItem;

}


function createPaymentForOrder($merchant_id,$access_token,$cash_tender_id,$order_id,$totalAmount)
{
	require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://api.clover.com/v3/merchants/'.$merchant_id.'/orders/'.$order_id.'/payments', [
  'body' => '{"tender":{"id":"'.$cash_tender_id.'"},"offline":"false","transactionSettings":{"disableCashBack":"false","cloverShouldHandleReceipts":"true","forcePinEntryOnSwipe":"false","disableRestartTransactionOnFailure":"false","allowOfflinePayment":"false","approveOfflinePaymentWithoutPrompt":"false","forceOfflinePayment":"false","disableReceiptSelection":"false","disableDuplicateCheck":"false","autoAcceptPaymentConfirmations":"false","autoAcceptSignature":"false","returnResultOnTransactionComplete":"false","disableCreditSurcharge":"false"},"transactionInfo":{"isTokenBasedTx":"false","emergencyFlag":"false"},"amount":'.$totalAmount.'}',
  'headers' => [
    'Authorization' => 'Bearer '.$access_token,
    'Content-Type' => 'application/json',
  ],
]);

return json_decode($response->getBody());
}






function createPaymentOnOrderCloverApiCURL($merchant_id,$access_token,$order_id,$tender_id,$totalAmountPaid)
{
	//$x = 'https://sandbox.dev.clover.com/v3/merchants/'.$merchant_id.'/orders/'.$order_id.'/payment';
	$curl = curl_init('https://sandbox.dev.clover.com/v3/merchants/'.$merchant_id.'/orders/'.$order_id.'/payment');
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        
        "Authorization:Bearer " . $access_token,
        'Content-Type: application/json'
    ));
	$data = '
	{
		"tender": {
			 "id": "'.$tender_id.'"
		},
		"offline": "false",
		"transactionSettings": {
			 "disableCashBack": "false",
			 "cloverShouldHandleReceipts": "true",
			 "forcePinEntryOnSwipe": "false",
			 "disableRestartTransactionOnFailure": "false",
			 "allowOfflinePayment": "false",
			 "approveOfflinePaymentWithoutPrompt": "false",
			 "forceOfflinePayment": "false",
			 "disableReceiptSelection": "false",
			 "disableDuplicateCheck": "false",
			 "autoAcceptPaymentConfirmations": "false",
			 "autoAcceptSignature": "false",
			 "returnResultOnTransactionComplete": "false",
			 "disableCreditSurcharge": "false"
		},
		"transactionInfo": {
			 "isTokenBasedTx": "false",
			 "emergencyFlag": "false"
		},
		"amount": '.$totalAmountPaid.'
   }
	';

    
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $auth           = curl_exec($curl);
    $info           = curl_getinfo($curl);
    $order_payment_data = json_decode($auth);
    return $order_payment_data; 
	

}

/************************************
 * 
 *  CRON JOB SETUP
 * 
 *************************************/




/**
 *  CURL Declaration for Category API
 */

function SyncCloverApiForCategories()
{
/*	$curl = curl_init('https://sandbox.dev.clover.com/v3/merchants/BHDGGQDRHGBP1/categories');
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        
        "Authorization:Bearer " . $access_token,
        'Content-Type: application/json'
    ));*/
	
	/*$merchant_id="EKCP62Z52H804";
	$access_token="418ea562-5b81-7c91-df6a-26ba8c69aca6";*/

	$merchant_id="BHDGGQDRHGBP1";
	$access_token="e1e76a31-6e49-ca7f-1b10-a1061fedd3a0";
    
    $cURLConnection = curl_init();
	//curl_setopt($cURLConnection, CURLOPT_URL, 'https://api.clover.com/v3/merchants/'.$merchant_id.'/categories');
	url_setopt($cURLConnection, CURLOPT_URL, 'https://sandbox.dev.clover.com/v3/merchants/'.$merchant_id.'/categories');
	curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
		'Authorization:Bearer '.$access_token,
		'Content-Type: application/json'
	));
	$categoryLists = curl_exec($cURLConnection);
	curl_close($cURLConnection);
	$jsonArrayResponse = json_decode($categoryLists);
	return $jsonArrayResponse;
}

//add_action('admin_init','SyncCloverApiForCategories');


/**
 * Cron job called for curl categories API
 */

function CronJobAddUpdateItemCategoryProcess() {

	$term_meta_array = array();
	$post_datas = SyncCloverApiForCategories(); // Called Curl category sync function
	$post_datas = $post_datas->elements;
	//echo "<pre>";print_r($post_datas);echo "</pre>";
	if(!empty($post_datas)):

		$get_term_meta = getAllTermMeta();
		$meta_counter=0;
		foreach($get_term_meta as $single_term_meta):
			$term_meta_array[$meta_counter]['id'] = $single_term_meta->meta_value;
			$term_meta_array[$meta_counter]['term_id'] = $single_term_meta->term_id;
		$meta_counter++;
		endforeach;

		foreach ($post_datas as $key => $val){

			$key = array_search($val->id, array_column($term_meta_array, 'id'));

			if(!empty($key) || $key === 0)
			{
				$term_id = $term_meta_array[$key]['term_id'];
	
				if(!empty($term_id)):
					$term_meta = wp_update_term(
						$term_id,
						'product_cat',
						array(
							'name' => $val->name,
							'description'=> '',
							'slug' => strtolower($val->name)
						)
					);
					update_term_meta($term_id, 'colver_category_id', $val->id, true);
				endif;
				
			} 
			else
			{
					$term_meta = wp_create_term( $val->name, $taxonomy = 'product_cat');
					if (!get_term_meta($term_meta['term_id'], 'colver_category_id')) {
						add_term_meta($term_meta['term_id'], 'colver_category_id', $val->id, true);
				
					}
	
			}


			
		} 
	endif; 
}

//add_action('clover_api_sync_categories','CronJobAddUpdateItemCategoryProcess'); /* Cron Job Hook for Category sync process for every 2 min */
//add_action('admin_init','CronJobAddUpdateItemCategoryProcess');


/**
 *  CURL Declaration for Modifier Group API
 */
function SyncCloverApiForModifierGroup()
{
	$merchant_id="BHDGGQDRHGBP1";
	$access_token="e1e76a31-6e49-ca7f-1b10-a1061fedd3a0";
    
    $cURLConnection = curl_init();
	curl_setopt($cURLConnection, CURLOPT_URL, 'https://sandbox.dev.clover.com/v3/merchants/'.$merchant_id.'/modifier_groups');
	curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
		'Authorization:Bearer '.$access_token,
		'Content-Type: application/json'
	));
	$modifierGroups = curl_exec($cURLConnection);
	curl_close($cURLConnection);
	$jsonArrayResponse = json_decode($modifierGroups);
	return $jsonArrayResponse;
}

function CronJobAddUpdateItemModifiersGroupsProcess() {

	$post_datas = SyncCloverApiForModifierGroup(); // Called Curl category sync function
	//$post_datas = $_REQUEST['responseData'];
	$post_datas = $post_datas->elements;
	if(!empty($post_datas)):
		foreach ($post_datas as $key => $val){
			
			$modifierGroupID = $val->id;
			$modifierGroupName = $val->name;
			$modiferGroupUniqueID = $val->modifierIds;

				// Already exists modifier group id?
				$maybe_post_id = check_product_exist('modifierGroupID',$modifierGroupID);
				$product_id = $maybe_post_id ? $maybe_post_id : 0;
				if($product_id > 0 ) {
					echo "update";
					$update_args = array(
						'ID'           => $product_id,
						'post_title' => $modifierGroupName,
						'post_status' => 'publish',
						'post_type' => 'global_product_addon',
					);
					wp_update_post( $update_args );

				} else {
					echo "insert";
					$args = array (
						'post_title' => $modifierGroupName,
						'post_status' => 'publish',
						'post_type' => 'global_product_addon',
						);
						
						$product_id = wp_insert_post($args);
				}	

				/* update modifier group post meta */
				update_post_meta($product_id, 'modifierGroupID',$modifierGroupID);
				update_post_meta($product_id, '_all_products',0);
				update_post_meta($product_id, '_priority',10); 
				update_post_meta($product_id, '_product_addons','a:0:{}');
		}
	endif;
}
//add_action('admin_init','CronJobAddUpdateItemModifiersGroupsProcess');

/*
**
 *  CURL Declaration for Modifier API
 */
function SyncCloverApiForModifier()
{
	$merchant_id="BHDGGQDRHGBP1";
	$access_token="e1e76a31-6e49-ca7f-1b10-a1061fedd3a0";
    
    $cURLConnection = curl_init();
	curl_setopt($cURLConnection, CURLOPT_URL, 'https://sandbox.dev.clover.com/v3/merchants/'.$merchant_id.'/modifiers');
	curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
		'Authorization:Bearer '.$access_token,
		'Content-Type: application/json'
	));
	$modifiers = curl_exec($cURLConnection);
	curl_close($cURLConnection);
	$jsonArrayResponse = json_decode($modifiers);
	return $jsonArrayResponse;
}

function CronJobAddUpdateItemModifiersProcess() {

	$post_datas = SyncCloverApiForModifier();
	$post_datas = $post_datas->elements;
	//print_r($post_datas);
    global $wpdb;
	$sanitized_data_header = 'a:1:{i:0;a:16:{s:4:"name";s:7:"choices";s:12:"title_format";s:5:"label";s:18:"description_enable";i:0;s:11:"description";s:0:"";s:4:"type";s:8:"checkbox";s:7:"display";s:6:"select";s:8:"position";i:0;s:8:"required";i:0;s:12:"restrictions";i:0;s:17:"restrictions_type";s:8:"any_text";s:12:"adjust_price";i:0;s:10:"price_type";s:8:"flat_fee";s:5:"price";s:0:"";s:3:"min";d:0;s:3:"max";d:0;s:7:"options";';
	$sanitized_data_footer='}}}';
	$i=0;
	if(!empty($post_datas)):
		foreach ($post_datas as $key => $val){
			
			$group_id = $val->modifierGroup->id;
			$post_data = $wpdb->get_results( "select post_id,meta_key,meta_value from $wpdb->postmeta where meta_key='modifierGroupID' AND meta_value = '$group_id'", ARRAY_A );
			//print_r($post_data);
			$name = $val->name;
			$cname = strlen($name);
			$price = $val->price;
			$cprice = strlen($price);
			$post_id = $post_data[0]['post_id'];
			$id = $val->id;
			$available = $val->available;

			$arr1[$i]['name'] = $name;
			$arr1[$i]['price'] = $price;
			$arr1[$i]['gid'] = $group_id;
			$arr1[$i]['post_id'] = $post_id;
			$arr1[$i]['id'] = $id;
			$arr1[$i]['available'] = $available;
			$i++;
		
		}


		if(!empty($arr1)):
			$ganesh_arr=array();
			foreach($arr1 as $b)
			{
				$ganesh_arr[]=$b['gid'];		
			}
			$my_new_arr=array();
			$j=0;
			foreach($arr1 as $a)
			{
				if(in_array($a['gid'],$ganesh_arr))
				{
					$my_new_arr[$a['gid']][]=$a;
					$j++;	
				}
			}
		endif;

		if(!empty($my_new_arr)):
			$imported_data='';
			foreach($my_new_arr as $key=>$single_array)
			{
				$k=0;
				$repeated_data='';
				foreach($my_new_arr[$key] as $value):
					$option_name = $value['name'];
					$c_option_name = strlen($option_name);
					$option_price = number_format((float)$value['price']/100, 2, '.', '');
					$c_option_price = strlen($option_price);
					$repeated_data .= 'i:'.$k.';a:4:{s:5:"label";s:'.$c_option_name.':"'.$option_name.'";s:5:"price";s:'.$c_option_price.':"'.$option_price.'";s:5:"image";s:0:"";s:10:"price_type";s:14:"quantity_based";}';
					$post_id = $value['post_id'];
				$k++;
				endforeach;
				$sanitized_data_counter = 'a:'.$k.':{';
				$imported_data = $sanitized_data_header.$sanitized_data_counter.$repeated_data.$sanitized_data_footer;
				$wpdb->query($wpdb->prepare("UPDATE $wpdb->postmeta SET meta_value='$imported_data' WHERE meta_key='_product_addons' AND post_id=$post_id"));
				$repeated_data="";
			}

		endif;
	endif; 
}

//add_action('admin_init','CronJobAddUpdateItemModifiersProcess');



/*
**
 *  CURL Declaration for Product Sync API
 */
function SyncCloverApiForItems()
{
	$merchant_id="BHDGGQDRHGBP1";
	$access_token="e1e76a31-6e49-ca7f-1b10-a1061fedd3a0";
    
    $cURLConnection = curl_init();
	curl_setopt($cURLConnection, CURLOPT_URL, 'https://sandbox.dev.clover.com/v3/merchants/'.$merchant_id.'/items?expand=tags%2Ccategories%2CmodifierGroups');
	curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
		'Authorization:Bearer '.$access_token,
		'Content-Type: application/json'
	));
	$items = curl_exec($cURLConnection);
	curl_close($cURLConnection);
	$jsonArrayResponse = json_decode($items);
	return $jsonArrayResponse;
}

function CronJobAddUpdateItemInventoriesProcess() {

	global $wpdb;
	$post_datas = SyncCloverApiForItems();
	$post_datas = $post_datas->elements;

	/* serialized static data headers and footer */
	$sanitized_data_header = 'a:1:{i:0;a:16:{s:4:"name";s:7:"choices";s:12:"title_format";s:5:"label";s:18:"description_enable";i:0;s:11:"description";s:0:"";s:4:"type";s:8:"checkbox";s:7:"display";s:6:"select";s:8:"position";i:0;s:8:"required";i:0;s:12:"restrictions";i:0;s:17:"restrictions_type";s:8:"any_text";s:12:"adjust_price";i:0;s:10:"price_type";s:8:"flat_fee";s:5:"price";s:0:"";s:3:"min";d:0;s:3:"max";d:0;s:7:"options";';
	$sanitized_data_footer='}}}';
	
	$individual_modifiergroup_modifier = array();
	$description = "This is description";
	$short_desc = "This is short description";
	$stock_status = 'instock';

	/* code working till here */

	if(!empty($post_datas)):
		foreach ($post_datas as $key => $val){
			
			//echo "<pre>";print_r($val);echo "</pre>";
			
			$clover_product_id = $val->id;
			$product_name = $val->name;
			$product_sku= $val->sku;
			$product_price= $val->price;
			$product_price_decimal = number_format((float)$product_price/100, 2, '.', '');
			$product_cost= $val->cost;
			$product_cost_decimal = number_format((float)$product_cost/100, 2, '.', '');
			$product_pricetype= $val->priceType;
			$defaultTaxRates= $val->defaultTaxRates;
			$isRevenue= $val->isRevenue;
			$stockCount= $val->stockCount;
			$unitName= $val->unitName;
			$available = $val->available;
	
			// Already exists sku?
			$maybe_post_id = check_product_exist('_sku',$product_sku);
			$product_id = $maybe_post_id ? $maybe_post_id : 0;
			if($product_id > 0 ) {
				//echo "update";
				$update_args = array(
					'ID'           => $product_id,
					'post_title'   => $product_name,
					'post_content' => $description,
					'post_excerpt' => $short_desc,
				);
				wp_update_post( $update_args );
	
			} else {
				//echo "insert";
				$args = array (
					'post_content' => $description,
					'post_title' => $product_name,
					'post_excerpt' => $short_desc,
					'post_status' => 'publish',
					'post_type' => 'product',
					);
					
					$product_id = wp_insert_post($args);
			}
	
			/* modifier group sync process */
			if(!empty($val->modifierGroups)): 
				$p=0;
				foreach($val->modifierGroups as $modifier):
					$modifiers_group_data='';
					foreach($modifier as $key=>$vallue):
						/* Calling function to get modifiers based on modifier group ids */
						$individual_modifiergroup_modifier = getAllModifiersbyModifiersId($vallue->id);
						$modifiers_group_data .=$vallue->id.","; /* assigned modifier group ids */
						$repeated_data='';
						$modifiers_data='';
						$k=0;
						$mod_index=1;
						$modifiers_meta=array();
						foreach($individual_modifiergroup_modifier->elements as $value):
							
							//echo "<pre>";print_r($value);echo "</pre>";
							$ItemModifierId = $value->id;
							$ItemModifierName = $value->name;
							$CItemModifierName = strlen($ItemModifierName);
							$ItemModifierPrice = number_format((float)$value->price/100, 2, '.', '');
							$CItemModifierPrice = strlen($ItemModifierPrice);
							$modifiers_data .= $ItemModifierId.","; /* Assiged modifiers id */
							$repeated_data .= 'i:'.$k.';a:4:{s:5:"label";s:'.$CItemModifierName.':"'.$ItemModifierName.'";s:5:"price";s:'.$CItemModifierPrice.':"'.$ItemModifierPrice.'";s:5:"image";s:0:"";s:10:"price_type";s:14:"quantity_based";}';
							//update_post_meta($product_id, '_modifiers_id_index_'.$mod_index,$ItemModifierId);
							
							$modifiers_meta[$k]['value'] =  $ItemModifierName;
							$modifiers_meta[$k]['id'] =  $ItemModifierId;
							
							$k++;
							$mod_index++;
						endforeach;
						$sanitized_data_counter = 'a:'.$k.':{';
						$imported_data = $sanitized_data_header.$sanitized_data_counter.$repeated_data.$sanitized_data_footer; 
						update_post_meta($product_id, '_product_addons',$imported_data);
						$wpdb->query($wpdb->prepare("UPDATE $wpdb->postmeta SET meta_value='$imported_data' WHERE meta_key='_product_addons' AND post_id=$product_id"));
						update_post_meta($product_id, '_modifiers_id',serialize($modifiers_meta)); /* Save modifiers id */
						
					endforeach;
					update_post_meta($product_id, '_modifiers_group_id',rtrim($modifiers_group_data, ',')); /* Save modifier group id */
				endforeach;	
			endif;
			
			/* update post meta during product creation or updation */
	
			update_post_meta($product_id, 'clover_item_id',$clover_product_id);
			update_post_meta($product_id, 'priceType',$product_pricetype);
			update_post_meta($product_id, 'defaultTaxRates',$defaultTaxRates);
			update_post_meta($product_id, 'unitName',$unitName);
			update_post_meta($product_id, '_sku',$product_sku);
			update_post_meta($product_id, '_price',$product_price_decimal);
			update_post_meta($product_id, '_regular_price',$product_price_decimal);
			update_post_meta($product_id, 'cost',$product_cost_decimal);
			update_post_meta($product_id, 'available',$available);
			update_post_meta($product_id, '_stock',$stockCount);
			update_post_meta($product_id, '_stock_status',$stock_status);
			//update_post_meta($product_id, '_manage_stock','yes');	
		}
	endif;
	
}
//add_action('admin_init','CronJobAddUpdateItemInventoriesProcess');


function add_terms_to_product($product_id,$term_id)
{
	wp_set_object_terms( $product_id, $term_id, 'product_cat' );
}

//add_action('admin_init','SyncCloverApiGetItemsStock');


function SyncCloverApiGetItemsStock()
{
	
	$merchant_id="EKCP62Z52H804";
	$access_token="418ea562-5b81-7c91-df6a-26ba8c69aca6";

	$args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
        global $product;

		$product_id = $product->get_id();
		$clover_product_id = get_post_meta($product_id,"clover_item_id",true);

		$cURLConnection = curl_init();
		curl_setopt($cURLConnection, CURLOPT_URL, 'https://api.clover.com/v3/merchants/'.$merchant_id.'/item_stocks/'.$clover_product_id);
		curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
		'Authorization:Bearer '.$access_token,
		'Content-Type: application/json'
	));
	$items_stock = curl_exec($cURLConnection);
	curl_close($cURLConnection);
	$jsonArrayResponse = json_decode($items_stock);
	$manage_stock = false;

	if ( $jsonArrayResponse->stockCount < 1 ) {
        $qty = 0;
		update_post_meta($product_id, '_stock',$qty);
		update_post_meta($product_id, '_stock_status','outofstock');
		
    }
	else
	{
		$qty = $jsonArrayResponse->stockCount;
		$manage_stock = true;
		update_post_meta($product_id, '_stock',$qty);
		update_post_meta($product_id, '_stock_status','instock');
	}
	$product = wc_get_product( $product_id );
    
    // Make changes to stock quantity and save
    $product->set_manage_stock( $manage_stock );
    $product->set_stock_quantity( $qty );
    $product->save();  
    endwhile;	
}

