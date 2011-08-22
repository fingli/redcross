<?php
/**
 * Template: Page.php
 *
 * @package RedCross
 * @subpackage Template
 */
get_header();
?>
	<!--BEGIN #sidebar_left-->
		<div id="sidebar_left" class="aside">
			<?php get_template_part( 'sidebar-left' ) ?>
		</div><!--END #sidebar_left-->
		
	<!--BEGIN #primary .hfeed-->
	<div id="primary" class="hfeed" role="main">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<!--BEGIN .hentry-->
			<article id="post-<?php the_ID(); ?>"><div class="<?php semantic_entries(); ?>">
				<header class="post-title"><h2 class="entry-title"><?php the_title(); ?></h2></header>
					<?php if ( current_user_can( 'edit_post', $post->ID ) ): ?>
					<!--BEGIN .entry-meta .entry-header-->
					<div class="entry-meta entry-header">
						<?php edit_post_link( __( 'edit', 'redline' ), '<span class="edit-post">[', ']</span>' ); ?></div><!--END .entry-meta .entry-header-->
					<?php endif; ?>

					<!--BEGIN .entry-content-->
					<div class="entry-content">
					<?php the_content(); ?>
					</div><!--END .entry-content-->

					<section class="meta-footer"><div class="entry-meta entry-footer"></div></section>
					
				<!-- Auto Discovery Trackbacks <?php trackback_rdf(); ?> -->

				</div></article><!--END .hentry-->
				
				<?php comments_template( '', true ); ?>

		<?php endwhile; endif; ?>

	</div><!--END #primary .hfeed-->

	<!--BEGIN #sidebar_right-->
	<div id="sidebar_right" class="aside">
		<?php get_template_part( 'sidebar-right' ) ?>
	</div><!--END #sidebar_right-->
	
<?php get_footer(); ?>