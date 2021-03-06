<?php

// WooCommerce Support.
  add_theme_support( 'woocommerce' );

// Remove Woocomerece Breadcrumb
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action( 'woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating', 10, 0 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 51 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_upsell_display', 49 );
function rename_tab($tabs) {
     $tabs['description']['title'] = __( 'Details' );
     return $tabs;
   
}
add_filter( 'woocommerce_product_tabs', 'rename_tab', 98 );

 // Ajax cart auto updates
function cart_count_fragments( $fragments ) {
    $fragments['span.badge.footer-badge'] = '<span class="badge footer-badge">' . WC()->cart->get_cart_contents_count() . '</span>';
    $fragments['span.badge.sub-menu-badge'] = '<span class="badge sub-menu-badge">' . WC()->cart->get_cart_contents_count() . '</span>';
    
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'cart_count_fragments', 10, 1 );

function my_theme_wrapper_start() {
  echo '<section id="products" class="container-fluid"><div class="row-fluid">';
}

function my_theme_wrapper_end() {
  echo '</div></section>';
}
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
