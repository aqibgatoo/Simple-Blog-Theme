<div id="comments">
	<?php
	// Is the post password protected?
	if (post_password_required()) : ?>
	<p class="nopassword">
		This post is password protected. Please enter your password.
	</p></div>
<?php
// Go back
return;
endif;
// Looking for comments
if ( have_comments() ) : ?>
	<h2 id="comments-title">
		There are <?php comments_number( 'no comments', 'one comment', '%
comments' ); ?>
	</h2>
	<?php
// Comment navigation
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-above">
			<div class="nav-previous">
				<?php previous_comments_link( '&larr; Older comments' ); ?>
			</div>
			<div class="nav-next">
				<?php next_comments_link( 'Newer comments &rarr;' ); ?>
			</div>
		</nav>
	<?php endif; ?>
	<ol class="commentlist">
		<?php
		// Listing the comments
		wp_list_comments();
		?>
	</ol>
	<?php
// Comment navigation
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-above">
			<div class="nav-previous">
				<?php previous_comments_link( '&larr; Older comments' ); ?>
			</div>
			<div class="nav-next">
				<?php next_comments_link( 'Newer comments &rarr;' ); ?>
			</div>
		</nav>
	<?php endif;
// And we're done
endif; ?>
<? phpcomment_form();
?>
</div>