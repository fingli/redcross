<?php
/**
 * Template: 404.php
 *
 * @package RedCross
 * @subpackage Template
 */
header( "HTTP/1.1 404 Not found", true, 404 );
get_header();
?>
	<!--BEGIN #sidebar_left-->
		<div id="sidebar_left" class="aside">
			<?php get_template_part( 'sidebar-left' ) ?>
		</div><!--END #sidebar_left-->
		
	<!--BEGIN #primary .hfeed-->
	<div id="primary" class="hfeed" role="main">
		<!--BEGIN #post-0-->
		<div id="post-0" class="<?php semantic_entries(); ?>">
			<h1 class="entry-title"><?php _e( 'Error 404! Not Found', 'redline' );?></h1>

			<!--BEGIN .entry-content-->
			<div class="entry-content">
				<p><?php _e( "Sorry, but you are looking for something that isn't here.", 'redline' );?></p>
				<p><?php get_search_form(); ?></p>
			<!--END .entry-content-->
			</div>
		<!--END #post-0-->
		</div>
	<!--END #primary .hfeed-->
	</div>

	<!--BEGIN #sidebar_right-->
	<div id="sidebar_right" class="aside">
		<?php get_template_part( 'sidebar-right' ) ?>
	</div><!--END #sidebar_right-->
	
<?php get_footer(); ?>