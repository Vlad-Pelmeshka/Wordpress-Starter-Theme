<?php
/*
function woocommerce_cart_link() {
    global $woocommerce;
    $cart_count = $woocommerce->cart->cart_contents_count;
    $cart_url = $woocommerce->cart->get_cart_url();

    $cart_output = '<a class="cart-contents" href="' . $cart_url . '" title="' . __( 'View your shopping cart', 'woocommerce' ) . '">';
    $cart_output .= '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27" fill="none">
    <path d="M7.66675 10L7.66675 6C7.66675 3.05448 10.0546 0.666667 13.0001 0.666667V0.666667C15.9456 0.666668 18.3334 3.05448 18.3334 6L18.3334 10" stroke="#333333" stroke-width="1.2" stroke-linecap="round"/>
    <path d="M24.7629 23.7871L23.1915 9.12043C23.0826 8.10415 22.2249 7.3335 21.2028 7.3335H4.79716C3.77507 7.3335 2.91743 8.10415 2.80855 9.12043L1.23712 23.7871C1.11046 24.9692 2.03685 26.0002 3.22573 26.0002H22.7743C23.9632 26.0002 24.8895 24.9692 24.7629 23.7871Z" stroke="#333333" stroke-width="1.2"/>
    </svg>';

    if ( $cart_count > 0 ) {
        $cart_output .= '<span class="uk-badge cart-count">' . $cart_count . '</span>';
    }
    $cart_output .= '</a>';
    return $cart_output;
}
add_shortcode('woo_cart', 'woocommerce_cart_link');*/

/*
function woocommerce_wishlist_link() {
    if (class_exists('YITH_WCWL')) {
        global $woocommerce;
        $wishlist_count = YITH_WCWL()->count_products();
        $wishlist_url = YITH_WCWL()->get_wishlist_url();
        $wishlist_output = '<a class="wishlist-contents" href="' . $wishlist_url . '" title="' . __( 'View your wishlist', 'woocommerce' ) . '">';
        $wishlist_output .= '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="25" viewBox="0 0 28 25" fill="none">
        <path d="M14 5.54568C11.1111 -1.21955 1 -0.498994 1 8.14775C1 16.7945 14 24 14 24C14 24 27 16.7945 27 8.14775C27 -0.498994 16.8889 -1.21955 14 5.54568Z" stroke="#333333" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>';
        if ( $wishlist_count > 0 ) {
            $wishlist_output .= '<span class="uk-badge cart-count">' . $wishlist_count . '</span>';
        }
        $wishlist_output .= '</a>';
        return $wishlist_output;
    }
}
add_shortcode('woo_wishlist', 'woocommerce_wishlist_link');*/