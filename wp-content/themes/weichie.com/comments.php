<?php if('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) return; ?>

<section id="comments">
	<?php global $comments_by_type;
	$comments_by_type = &separate_comments($comments); ?>

		<?php
			if(comments_open()):
				comment_form();
			endif;
		?>

	<?php if(!empty($comments_by_type['comment'])): ?>
		<section id="comments-list" class="comments">
			<h3 class="comments-title"><?php comments_number(); ?></h3>

			<?php if(get_comment_pages_count() > 1): ?>
				<nav id="comments-nav-above" class="comments-navigation" role="navigation">
					<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
				</nav>
			<?php endif; ?>

			<ul>
				<?php wp_list_comments('type=comment'); ?>
			</ul>

			<?php if(get_comment_pages_count() > 1): ?>
				<nav id="comments-nav-below" class="comments-navigation" role="navigation">
					<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
				</nav>
			<?php endif; ?>
		</section>
	<?php endif; ?>

	<?php if(!empty($comments_by_type['pings'])): ?>
		<?php $ping_count = count($comments_by_type['pings']); ?>
		<section id="trackbacks-list" class="comments">
			<h3 class="comments-title"><?php echo '<span class="ping-count">' . $ping_count . '</span> ' . ( $ping_count > 1 ? __( 'Trackbacks', 'weichie' ) : __( 'Trackback', 'weichie' ) ); ?></h3>
			<ul>
				<?php wp_list_comments( 'type=pings&callback=weichie_custom_pings' ); ?>
			</ul>
		</section>
	<?php endif; ?>
</section>
