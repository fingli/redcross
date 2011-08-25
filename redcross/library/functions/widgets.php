<?php
/**
 * Widgets - Improving the functionality for Widgets
 */

/**
 * redline_widgets_init() Registers widgetized areas, including three sidebars and four columns in the footer.
 *
 * @since 0.8
 */
function redline_widgets_init() {

	//Left Sidebar Widget Area
	register_sidebar( array (
		'name'          => __( 'Left Widget Area', 'redline' ),
		'description'   => __( 'The left widget area', 'redline' ),
		'id'            => 'left-widget-area',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>'
	) );

	//Right Sidebar Widget Area
	register_sidebar( array (
		'name'          => __( 'Right Widget Area', 'redline' ),
		'description'   => __( 'The right widget area', 'redline' ),
		'id'            => 'right-widget-area',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>'
	) );

// Footer Widgets
	// First Footer Widget Area
	register_sidebar( array (
		'name'          => __( 'First Footer Widget Area', 'redline' ),
		'description'   => __( 'The first footer widget area', 'redline' ),
		'id'            => 'first-footer-widget-area',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="widget-footer-title">',
		'after_title' 	=> '</h3>',
	) );

	// Second Footer Widget Area
	register_sidebar( array (
		'name'          => __( 'Second Footer Widget Area', 'redline' ),
		'description'   => __( 'The second footer widget area', 'redline' ),
		'id'            => 'second-footer-widget-area',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title'  => '<h3 class="widget-footer-title">',
		'after_title'   => '</h3>',
	) );

	// Third Footer Widget Area
	register_sidebar( array (
		'name'          => __( 'Third Footer Widget Area', 'redline' ),
		'description'   => __( 'The third footer widget area', 'redline' ),
		'id'            => 'third-footer-widget-area',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title'  => '<h3 class="widget-footer-title">',
		'after_title'   => '</h3>',
	) );

	// Fourth Footer Widget Area
	register_sidebar( array (
		'name'          => __( 'Fourth Footer Widget Area', 'redline' ),
		'description'   => __( 'The fourth footer widget area', 'redline' ),
		'id'            => 'fourth-footer-widget-area',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title'  => '<h3 class="widget-footer-title">',
		'after_title'   => '</h3>',
	) );

}
	add_action( 'init', 'redline_widgets_init' );

/**
 * widget_area_active() Checks to see if a widget area is active based on ID
 *
 * @since 0.4
 */
function widget_area_active( $index ) {
	global $wp_registered_sidebars;
	
	$widgetarea = wp_get_sidebars_widgets();
	if ( isset($widgetarea[$index]) ) return true;
	
	return false;
} 

/**
 * framework_widget_area() Gets Widget Area if widgets are active in that spot
 *
 * @since 0.4
 */
function framework_widget_area( $name = false ) {
	if ( !isset($name) ) {
		$widget[] = "widget.php";
	} else {
		$widget[] = "widget-{$name}.php";
	}
	locate_template( $widget, true );
}
?>