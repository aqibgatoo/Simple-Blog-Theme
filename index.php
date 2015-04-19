<?php get_header() ?>
<div id="main-container">
	<section id="content-container">
		<?php if ( have_posts() ): while ( have_posts() ) :
			the_post(); ?>
			<?php the_date( ' ', '<h3 class="the_date">', '</h3>' ) ?>
			<?php get_template_part( 'content', get_post_format() );?>
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
	</section>
	<!-- #main-container ends -->
	<?php get_sidebar() ?>
</div>

<?php get_footer() ?>

