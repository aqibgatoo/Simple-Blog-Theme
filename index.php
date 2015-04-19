<?php get_header() ?>
<div id="main-container">
	<section id="content-container">
		<?php if ( have_posts() ): while ( have_posts() ) :
			the_post(); ?>
			<?php the_date( ' ', '<h3 class="the_date">', '</h3>' ) ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header>
					<h2 class="entry-title"><a href="<?php the_permalink() ?>"
					                           title="<?php the_title_attribute() ?>"><?php the_title() ?></a>
					</h2>

					<p class="entry-meta">Posted on
						<time datetime="<?php echo get_the_date(); ?>"><?php the_time(); ?></time>
						by <a href="#"><?php the_author_link(); ?></a>
						<?php if ( comments_open() ): ?>
							&bull; <?php comments_popup_link( 'No comments', '1 comment', '% comments' ) ?>
						<?php endif; ?>
				</header>
				<?php the_content();?>
			</article>
			<?php if ( is_singular() ) {
			comments_template( '', true );
		}
		endwhile; ?>
		<?php else: ?>
			<article id="post-0" class="post no-results not-found">
				<header>
					<h2 class="entry-title">Nothing found
					</h2>

					<p class="entry-meta">We are sorry nothing was found</p>
					<?php get_search_form(); ?>
				</header>
				<?php the_content(); ?>
			</article>
		<?php endif; ?>
		<!-- #main-container ends -->
		<?php get_sidebar() ?>
</div>

<?php get_footer() ?>

