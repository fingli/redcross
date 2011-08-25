<?php
/**
 * Template: SidebarLeft.php
 *
 * @package RedCross
 * @subpackage Template
 */
?>
	<?php	/* Widgetized Area */
		if ( ! dynamic_sidebar( 'left-widget-area' ) ) : ?>
		<!--BEGIN #widget-pages-->
			<div class="widget">
				<h3 class="widget-title"><?php _e( 'Pages', 'redline' );?></h3>
				<ul class="xoxo">
					<?php wp_list_pages( 'title_li=' ); ?>
				</ul>
			</div><!--END #widget-pages-->
	<?php endif; /* (!function_exists('dynamic_sidebar') */ ?>

