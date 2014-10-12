<?php // Opening PHP tag - nothing should be before this, not even whitespace

add_filter( 'wp_admin_bar_class', '__return_false' );

register_sidebar( array(
		'name' => __( 'Top Widget Area', 'twentytwelve-bepro' ),
		'id' => 'new-widget-area',
		'description' => __( 'Appears at the top', 'twentytwelve-bepro' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

register_sidebar( array(
		'name' => __( 'Middle Widget Area', 'twentytwelve-bepro' ),
		'id' => 'buscar-widget-area',
		'description' => __( 'Appears at the middle', 'twentytwelve-bepro' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

register_sidebar( array(
		'name' => __( 'Bottom Widget Area', 'twentytwelve-bepro' ),
		'id' => 'home-widget-area',
		'description' => __( 'Appears at the bottom', 'twentytwelve-bepro' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


/* Sample Custom Function
if ( ! function_exists( 'favicon_link' ) ) {
	function favicon_link() {
    	echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
	}
	add_action( 'wp_head', 'favicon_link' );
}  */
