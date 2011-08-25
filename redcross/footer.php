<?php
/**
 * Template: Footer.php
 *
 * @package RedCross
 * @subpackage Template
 */
?>
</div><!--END #content-->
<!--BEGIN #footer-->
<div id="footer">
<div id="sidebar_footer" role="complementary"><?php get_sidebar( 'footer' ); ?></div>
<!--BEGIN #copyright-->
<footer role="contentinfo"><div id="copyright">&copy; <?php the_time( 'Y' ); ?> <a href="<?php echo home_url( '/' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>. <?php wpframework_credits(); ?></div></footer><!--END #copyright-->
</div><!--END #footer-->
</div><!--END #container-->
<!-- Theme Hook 
	 (Place any custom script or code here) 
-->
	<?php wp_footer(); ?><!--END Theme-->
</body><!--END body-->
</html><!--END html(kthxbye)-->
