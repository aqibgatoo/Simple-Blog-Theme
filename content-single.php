<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2 class="entry-title"><?php the_title(); ?></a></h2>

		<p class="entry-meta">Posted on
			<time datetime="<?php echo get_the_date(); ?>"><?php the_time(); ?></time>
			by <a href="#"><?php the_author_link(); ?></a>
			<?php if ( comments_open() ) : ?>
				&bull; <?php comments_popup_link( 'No comments', '1 comment', '% comments' ) ?>
			<?php endif; ?>
	</header>
	<?php the_content(); ?>
</article>