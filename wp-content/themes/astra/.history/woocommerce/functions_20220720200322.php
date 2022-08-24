

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

//===================================================================================================================

/**
 * Order details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.6.0
 */

defined( 'ABSPATH' ) || exit;

$order = wc_get_order( $order_id ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited

if ( ! $order ) {
	return;
}

$order_items           = $order->get_items( apply_filters( 'woocommerce_purchase_order_item_types', 'line_item' ) );
$show_purchase_note    = $order->has_status( apply_filters( 'woocommerce_purchase_note_order_statuses', array( 'completed', 'processing' ) ) );
$show_customer_details = is_user_logged_in() && $order->get_user_id() === get_current_user_id();
$downloads             = $order->get_downloadable_items();
$show_downloads        = $order->has_downloadable_item() && $order->is_download_permitted();

if ( $show_downloads ) {
	wc_get_template(
		'order/order-downloads.php',
		array(
			'downloads'  => $downloads,
			'show_title' => true,
		)
	);
}
?>
<section class="woocommerce-order-details">
	<?php do_action( 'woocommerce_order_details_before_order_table', $order ); ?>

	<h2 class="woocommerce-order-details__title"><?php esc_html_e( 'Order details', 'woocommerce' ); ?></h2>

	<table class="woocommerce-table woocommerce-table--order-details shop_table order_details">

		<thead>
			<tr>
				<th class="woocommerce-table__product-name product-name"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
				<th class="woocommerce-table__product-table product-total"><?php esc_html_e( 'Total', 'woocommerce' ); ?></th>
			</tr>
		</thead>

		<tbody>
			<?php
			do_action( 'woocommerce_order_details_before_order_table_items', $order );

			foreach ( $order_items as $item_id => $item ) {
				$product = $item->get_product();

				wc_get_template(
					'order/order-details-item.php',
					array(
						'order'              => $order,
						'item_id'            => $item_id,
						'item'               => $item,
						'show_purchase_note' => $show_purchase_note,
						'purchase_note'      => $product ? $product->get_purchase_note() : '',
						'product'            => $product,
					)
				);
			}

			do_action( 'woocommerce_order_details_after_order_table_items', $order );
			?>
		</tbody>

		<tfoot>
			<?php
			foreach ( $order->get_order_item_totals() as $key => $total ) {
				?>
					<tr>
						<th scope="row"><?php echo esc_html( $total['label'] ); ?></th>
						<td><?php echo ( 'payment_method' === $key ) ? esc_html( $total['value'] ) : wp_kses_post( $total['value'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></td>
					</tr>
					<?php
			}
			?>
			<?php if ( $order->get_customer_note() ) : ?>
				<tr>
					<th><?php esc_html_e( 'Note:', 'woocommerce' ); ?></th>
					<td><?php echo wp_kses_post( nl2br( wptexturize( $order->get_customer_note() ) ) ); ?></td>
				</tr>
			<?php endif; ?>
		</tfoot>
	</table>

	<?php do_action( 'woocommerce_order_details_after_order_table', $order ); ?>
</section>

<?php
/**
 * Action hook fired after the order details.
 *
 * @since 4.4.0
 * @param WC_Order $order Order data.
 */
do_action( 'woocommerce_after_order_details', $order );

if ( $show_customer_details ) {
	wc_get_template( 'order/order-details-customer.php', array( 'order' => $order ) );
}

