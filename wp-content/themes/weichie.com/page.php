<?php get_header(); if(have_posts()):while(have_posts()):the_post(); ?>

<div class="container xl">
  <!-- <h1>
    /*<?= the_title(); ?>*/
  </h1> -->
  <?= the_content(); ?>
</div>

<?php endwhile; endif; get_footer(); ?>
