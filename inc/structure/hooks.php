<?php
/**
 * storefront hooks
 *
 * @package storefront
 */

/**
 * General
 * @see  storefront_setup()
 * @see  storefront_widgets_init()
 * @see  storefront_scripts()
 * @see  storefront_header_widget_region()
 */
add_action( 'after_setup_theme', 			'storefront_setup' );
add_action( 'widgets_init', 				'storefront_widgets_init' );
add_action( 'wp_enqueue_scripts', 			'storefront_scripts' );
add_action( 'storefront_before_content', 	'storefront_header_widget_region', 10 );

/**
 * Header
 * @see  storefront_secondary_navigation()
 * @see  storefront_site_branding()
 * @see  storefront_primary_navigation()
 */
add_action( 'storefront_header', 'storefront_site_branding', 			10 );
add_action( 'storefront_header', 'storefront_secondary_navigation', 	20 );
add_action( 'storefront_header', 'storefront_primary_navigation', 	40 );


/**
 * Footer
 * @see  storefront_footer_widgets()
 * @see  storefront_credit()
 */
add_action( 'storefront_footer', 'storefront_footer_widgets', 10 );
add_action( 'storefront_footer', 'storefront_credit', 		20 );

/**
 * Homepage
 * @see  storefront_page_content()
 * @see  storefront_product_categories()
 * @see  storefront_recent_products()
 * @see  storefront_featured_products()
 * @see  storefront_popular_products()
 * @see  storefront_on_sale_products()
 */
add_action( 'homepage', 'storefront_page_content', 			10 );
add_action( 'homepage', 'storefront_product_categories', 	20 );
add_action( 'homepage', 'storefront_recent_products', 		30 );
add_action( 'homepage', 'storefront_featured_products', 	40 );
add_action( 'homepage', 'storefront_popular_products', 		50 );
add_action( 'homepage', 'storefront_on_sale_products', 		60 );

/**
 * Loop
 * @see  storefront_paging_nav()
 */
add_action( 'storefront_loop_after', 'storefront_paging_nav', 10 );

/**
 * Extras
 * @see  storefront_setup_author()
 * @see  storefront_wp_title()
 * @see  storefront_body_classes()
 * @see  storefront_page_menu_args()
 */
add_action( 'wp', 					'storefront_setup_author' );
add_filter( 'wp_title', 			'storefront_wp_title', 	10, 2 );
add_filter( 'body_class', 			'storefront_body_classes' );
add_filter( 'wp_page_menu_args', 	'storefront_page_menu_args' );