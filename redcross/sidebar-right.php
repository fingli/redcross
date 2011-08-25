<?php
/**
 * Template: SidebarRight.php
 *
 * @package RedCross
 * @subpackage Template
 */
?>
	<?php	/* Widgetized Area */
		if ( ! dynamic_sidebar( 'right-widget-area' ) ) : ?>
	<div class="widget">
		<h3 class="widget-title"><?php _e( 'Site admin', 'redline' );?></h3>
		<ul><?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul>
	</div>
	<?php endif; /* (!function_exists('dynamic_sidebar') */ ?>

