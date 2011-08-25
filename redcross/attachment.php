<?php
/**
 * Template: Attachment.php
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
				<div id="post-<?php the_ID(); ?>" class="<?php semantic_entries(); ?>">
					<h1 class="entry-title"><a href="<?php echo get_permalink($post->post_parent); ?>" rel="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h1>
					
					<!--BEGIN .entry-meta .entry-header-->
					<div class="entry-meta entry-header">
						<span class="author vcard"><?php _e( 'Written by', 'redline' );?> <?php printf( '<a class="url fn" href="' . get_author_posts_url( $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'redline' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
						<span class="published"><?php _e( 'on', 'redline' );?> <abbr class="published-time" title="<?php the_time( get_option( 'date_format' ) .' - '. get_option( 'time_format' ) ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
						<span class="meta-sep">&mdash;</span>
						<span class="comment-count"><a href="<?php comments_link(); ?>"><?php comments_number( __( 'Leave a Comment', 'redline' ), __( '1 Comment', 'redline' ), __( '% Comments', 'redline' ) ); ?></a></span>
						<?php edit_post_link( 'edit', '<span class="edit-post">[', ']</span>' ); ?>
					<!--END .entry-meta .entry-header-->
					</div>
					
					<!--BEGIN .entry-content .article-->
					<div class="entry-content article">
						<div class="entry-attachment">
							<?php echo wp_get_attachment_link( $post->ID, 'medium', false, true); ?>
						</div>
						<?php the_content(); ?>
					 <!--END .entry-content .article-->
					</div>
				<!--END .hentry-->
				</div>

				<?php comments_template( '', true ); ?>
				<?php get_template_part( 'navigation' ) ?>
				<?php endwhile; else : ?>

				<!--BEGIN #post-0-->
				<div id="post-0" class="<?php semantic_entries(); ?>">
					<h1 class="entry-title"><?php _e( 'Not Found', 'redline' );?></h1>

					<!--BEGIN .entry-content-->
					<div class="entry-content">
						<p><?php _e( 'Sorry, no attachments matched your criteria.', 'redline' );?></p>
						<?php get_search_form(); ?>
					<!--END .entry-content-->
					</div>
				<!--END #post-0-->
				</div>

			<?php endif; ?>
			<!--END #primary .hfeed-->
			</div>

	<!--BEGIN #sidebar_right-->
	<div id="sidebar_right" class="aside">
		<?php get_template_part( 'sidebar-right' ) ?>
	</div><!--END #sidebar_right-->
	
<?php get_footer(); ?>