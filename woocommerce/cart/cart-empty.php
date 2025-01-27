<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked wc_empty_cart_message - 10
 */
do_action( 'woocommerce_cart_is_empty' );

if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
	<div class="tutor-cart-empty-state">
    <img src="<?php echo esc_url(tutor()->url); ?>assets/images/empty-cart.svg"
        alt="<?php esc_html_e('Empty shopping cart', 'tutor'); ?>" />
    <p><?php esc_html_e('No courses in the cart', 'tutor'); ?></p>
    <a href="<?php echo esc_url(tutor_utils()->course_archive_page_url()); ?>"
        class="tutor-btn tutor-btn-lg tutor-btn-primary"><?php esc_html_e('Continue Browsing', 'tutor'); ?></a>
</div>
<?php endif; ?>
