<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2 class="entry-title"><?php the_title(); ?>S</h2>
		<?php if ( is_single() ): ?>
			<p class="entry-meta">Posted on
			<time datetime="<?php echo get_the_date(); ?>"><?php the_time(); ?></time>
			by <a href="#"><?php the_author_link(); ?></a>
			<?php if ( comments_open() ) : ?>
				&bull; <?php comments_popup_link( 'No comments', '1 comment', '% comments' ) ?>
			<?php endif; ?>

			<?php if ( is_singular( 'post' ) ):
				?>
				<br/> Filed in <?php the_category( ', ' );?>
				<?php the_tags( ' and tagged with', ', ', '' );?>
				</p>
			<?php endif;
		endif; ?>
	</header>
	<?php the_content(); ?>
</article>