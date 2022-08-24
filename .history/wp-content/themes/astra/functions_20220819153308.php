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
	wp_enqueue_script( 'new-js', get_template_directory_uri() . '/js/new.js', array(), null, true );
	wp_localize_script( 'new-js', 'ig2go_script_object',
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














function SyncCloverApiForCategories()
{
/*	$curl = curl_init('https://sandbox.dev.clover.com/v3/merchants/BHDGGQDRHGBP1/categories');
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        
        "Authorization:Bearer " . $access_token,
        'Content-Type: application/json'
    ));*/
	
	/*$merchant_id="EKCP62Z52H804";
	$access_token="418ea562-5b81-7c91-df6a-26ba8c69aca6";*/

	$merchant_id="VE1TKEVCT7761";
	$access_token="dda48b52-f548-77c1-f2d4-7ed6e85d7876";
    
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
