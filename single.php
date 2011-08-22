<?php
/**
 * Template: Single.php
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
		<article id="post-<?php the_ID(); ?>">
		<div class="<?php semantic_entries(); ?>">
		<header class="post-title"><h2 class="entry-title"><?php the_title(); ?></h2></header>

			<!--BEGIN .entry-meta .entry-header-->
			<section class="meta-header"><div class="entry-meta entry-header">
			<span class="author vcard"> <?php printf( '<a class="url fn" href="' . get_author_posts_url( $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'redline' ), $authordata->display_name ) . '">' . get_the_author_link() . '</a>' ) ?></span>
						
			<span class="published"><?php _e( 'on', 'redline' );?> <abbr class="published-time" title="<?php the_time( get_option( 'date_format' ) .' - '. get_option( 'time_format' ) ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
			<span class="meta-sep">&mdash;</span>
			<span class="comment-count"><a href="<?php comments_link(); ?>"><?php comments_number( __( 'Leave a Comment','redline' ), __( '1 Comment', 'redline' ), __( '% Comments', 'redline' ) ); ?></a></span>
				<?php edit_post_link( __( 'edit', 'redline' ), '<span class="edit-post">[', ']</span>' ); ?>
		</div></section><!--END .entry-meta .entry-header-->
					
		<!--BEGIN .entry-content -->
		<div class="entry-content">
		<?php the_content( __( 'Read more', 'redline' ) . ' &raquo;'); ?>
			<?php wp_link_pages( array( 'before' => '<div id="page-links"><p><strong>' . __( 'Pages:', 'redline' ) . '</strong> ', 'after' => '</p></div>', 'next_or_number' => 'number' ) ); ?>
		</div><!--END .entry-content-->

		<!--BEGIN .entry-meta .entry-footer-->
        <section class="meta-footer"><div class="entry-meta entry-footer">
            <span class="entry-categories"><?php _e( 'Posted in', 'redline' );?> <?php echo framework_get_terms( 'cats' ); ?></span>
				<?php if ( framework_get_terms( 'tags' ) ) { ?>
			<span class="meta-sep">|</span>
			<span class="entry-tags"><?php _e( 'Tagged', 'redline' );?> <?php echo framework_get_terms( 'tags' ); ?></span>
					<?php } ?>
		</div></section><!--END .entry-meta .entry-footer-->

		<!-- Auto Discovery Trackbacks <?php trackback_rdf(); ?> -->
			
		</div></article><!--END .hentry-->

			<?php comments_template( '', true ); ?>
			<?php get_template_part( 'navigation' ) ?> 
			<?php endwhile; else : ?>

				<!--BEGIN #post-0-->
				<div id="post-0" class="<?php semantic_entries(); ?>">
					<h2 class="entry-title"><?php _e( 'Not Found', 'redline' );?></h2>

					<!--BEGIN .entry-content-->
					<div class="entry-content">
						<p><?php _e( "Sorry, but you are looking for something that isn't here.", 'redline' );?></p>
						<?php get_search_form(); ?>
					<!--END .entry-content-->
					</div>
				<!--END #post-0-->
				</div>

	<?php endif; ?>

	</div><!--END #primary .hfeed-->

	<!--BEGIN #sidebar_right-->
	<div id="sidebar_right" class="aside">
		<?php get_template_part( 'sidebar-right' ) ?>
	</div><!--END #sidebar_right-->
	
<?php get_footer(); ?>