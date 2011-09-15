<?php
/**
 * Template: Search.php
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
				<h2 class="entry-title search-title"><?php _e( 'Search Results for:', 'redline' );?> <?php the_post(); echo '<span class="search-term">'. the_search_query() .'</span>'; rewind_posts(); ?></h2><br />

				<!--BEGIN #search-query-->
				<ol id="search-query">
				<?php while ( have_posts() ) : the_post(); ?>

				<!--BEGIN .hentry-->
				<li id="post-<?php the_ID(); ?>" class="<?php semantic_entries(); ?>">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'redline' );?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

					<!--BEGIN .entry-meta .entry-header-->
					<div class="entry-meta entry-header">
						<span class="author vcard"><?php _e( 'Written by', 'redline' );?> <?php printf( '<a class="url fn" href="' . get_author_posts_url( $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'redline' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
						<span class="published">on <abbr class="published-time" title="<?php the_time( get_option( 'date_format' ) .' - '. get_option( 'time_format' ) ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
						<span class="meta-sep">&mdash;</span>
						<span class="comment-count"><a href="<?php comments_link(); ?>"><?php comments_number( __( 'Leave a Comment', 'redline' ), __( '1 Comment', 'redline' ), __( '% Comments', 'redline' ) ); ?></a></span>
						<?php edit_post_link( __( 'edit', 'redline' ), '<span class="edit-post">[', ']</span>' ); ?>
					<!--END .entry-meta .entry-header-->
					</div>

					<!--BEGIN .entry-summary .article-->
					<div class="entry-summary article">
						<?php the_excerpt(); ?>
					<!--END .entry-summary .article-->
					</div>

					<!--BEGIN .entry-meta .entry-footer-->
					<div class="entry-meta entry-footer">
					<span class="entry-categories"><?php _e( 'Posted in', 'redline' );?> <?php echo framework_get_terms( 'cats' ); ?></span>
						<?php if ( framework_get_terms( 'tags' ) ) { ?>
							<span class="meta-sep">|</span>
							<span class="entry-tags"><?php _e( 'Tagged', 'redline' );?> <?php echo framework_get_terms( 'tags' ); ?></span>
						<?php } ?>
					<!--END .entry-meta .entry-footer-->
					</div>
				<!--END .hentry-->
				</li>

				<?php endwhile; ?>
				<!--END #search-query-->
				</ol>
				<?php get_template_part( 'navigation' ) ?>
				<?php else : ?>

				<!--BEGIN #post-0-->
				<div id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Your search for', 'redline' );?> "<?php the_search_query(); ?>" <?php _e( 'did not match any entries', 'redline' );?></h2>
					
					<!--BEGIN .entry-content-->
					<div class="entry-content">
						<p><?php _e( 'Suggestions:', 'redline' );?></p>
						<ul>
							<li><?php _e( 'Make sure all words are spelled correctly.', 'redline' );?></li>
							<li><?php _e( 'Try different keywords.', 'redline' );?></li>
							<li><?php _e( 'Try more general keywords.', 'redline' );?></li>
						</ul>
						<p><?php get_search_form(); ?></p>	
						<br />
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