<?php get_header(); ?>

<div class="container lg error-container">
  <h1>That's a 404!</h1>
  <p>Apologies, the page you are looking for does not exist.</p>

  <a href="<?= home_url(); ?>" class="btn btn-ghost btn-lg">
    <span>Return to homepage</span>
  </a>
</div>

<?php get_footer(); ?>
