<?php get_header(); ?>

<div class="container xl">
  <?php if(have_posts()): ?>
    <h1><?php printf(__('Search Results for: %s', 'weichie'), get_search_query()); ?></h1>

    <div class="grid__results">
      <?php while(have_posts()) : the_post(); ?>
          <?php get_template_part('parts/card', 'post'); ?>
      <?php endwhile; ?>
    </div>
  <?php else: ?>
    <h1>Nothing Found</h1>

    <div class="no-results">
      <p>Sorry, nothing matched your search. Please try again.</p>
      <?php get_search_form(); ?>
    </div>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
