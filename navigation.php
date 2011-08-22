<?php
/**
 * Template: Navigation.php 
 *
 * @package RedCross
 * @subpackage Template
 */

if ( is_singular() and !is_page() ) { ?>
<!--BEGIN .navigation-links-->
<nav id="page_navigation"><div class="navigation-links single-page-navigation">
	<div class="nav-previous"><?php previous_post_link( '&laquo; <span class="nav-meta">%link</span>' ); ?></div>
	<div class="nav-next"><?php next_post_link( '%link <span class="nav-meta">&raquo;</span>' ); ?></div>
</div></nav><!--END .navigation-links-->
<?php } else { ?>
<!--BEGIN .navigation-links-->
<nav id="page_navigation"><div class="navigation-links page-navigation">
	<span class="nav-next"><?php next_posts_link( '&laquo; ' . __( 'Older Entries', 'redline' ) ); ?></span>
	<span class="nav-previous"><?php previous_posts_link( __( 'Newer Entries', 'redline' ) . ' &raquo;' ); ?></span>
</div></nav><!--END .navigation-links-->
<?php } ?>