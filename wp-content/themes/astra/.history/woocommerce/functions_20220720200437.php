

<?php
/* 
 * Add New Product Type to Select Dropdown
 */
add_filter( 'product_type_selector', 'pd_add_custom_product_type' );
 
function pd_add_custom_product_type( $types ){
    $types[ 'custom' ] = 'Online Classes';
    return $types;
}
 
/* 
 * Add New Product Type Class
 */

add_action( 'init', 'pd_create_custom_product_type' );
 
function pd_create_custom_product_type(){
    class WC_Product_Custom extends WC_Product {
        public function get_type() {
            return 'custom';
        }
    }
}
 
/* 
 * Load New Product Type Class
 */

add_filter( 'woocommerce_product_class', 'pd_woocommerce_product_class', 10, 2 );
 
function pd_woocommerce_product_class( $classname, $product_type ) {
    if ( $product_type == 'custom' ) { 
        $classname = 'WC_Product_Custom';
    }
    return $classname;
}

//------------------------------------------------------------------------------------------------------
// Add custom data
// Adding Price fields & inventory to custom product type
add_action('admin_footer', 'pd_custom_product_admin_custom_js');
function pd_custom_product_admin_custom_js() {

    if ('product' != get_post_type()) :
        return;
    endif;
    ?>
    <script type='text/javascript'>
        jQuery(document).ready(function () {
            //for Price tab
            jQuery('.options_group.pricing').addClass('show_if_custom').show();
            //for Inventory tab
            jQuery('.inventory_options').addClass('show_if_custom').show();
            jQuery('#inventory_product_data ._manage_stock_field').addClass('show_if_custom').show();
            jQuery('#inventory_product_data ._sold_individually_field').parent().addClass('show_if_custom').show();
            jQuery('#inventory_product_data ._sold_individually_field').addClass('show_if_custom').show();
        });
    </script>
    <?php
}

// add the settings under ‘General’ sub-menu
add_action( 'woocommerce_product_options_general_product_data', 'pd_add_custom_settings' );
function pd_add_custom_settings() {
    global $woocommerce, $post;
    echo '<div class="options_group">';

    // Create a number field, for example for UPC
    woocommerce_wp_text_input(
      array(
       'id'                => 'pd_custom_field',
       'label'             => __( 'Custom', 'woocommerce' ),
       'placeholder'       => '',
       'desc_tip'    => 'true',
       'description'       => __( 'Enter Custom Field Data', 'woocommerce' ),
       'type'              => 'number',
       'wrapper_class' => 'show_if_custom',
       ));

    // Create a checkbox for product purchase status
      woocommerce_wp_checkbox(
       array(
       'id'            => 'pd_is_purchasable',
       'label'         => __('Is Purchasable', 'woocommerce' ),
       'wrapper_class' => 'show_if_custom',
       ));

    echo '</div>';
}

//=====================================================================================================================
//save custom data

add_action( 'woocommerce_process_product_meta', 'pd_save_custom_settings' );
function pd_save_custom_settings( $post_id ){
    // save custom fields
    $pd_custom_field = $_POST['pd_custom_field'];
    if( !empty( $pd_custom_field ) )
    update_post_meta( $post_id, 'pd_custom_field', esc_attr( $pd_custom_field) );

    // save purchasable option
    $pd_purchasable = isset( $_POST['pd_is_purchasable'] ) ? 'yes' : 'no';
    update_post_meta( $post_id, 'pd_is_purchasable', $pd_purchasable );
}
