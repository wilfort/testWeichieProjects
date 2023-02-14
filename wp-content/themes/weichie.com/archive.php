<?php get_header(); ?>
	<h1>Archive</h1>

	<?php if(have_posts()): ?>
		<?php while(have_posts()):the_post(); ?>
			<p>Archive Content</p>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>