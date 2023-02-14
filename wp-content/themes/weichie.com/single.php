<?php get_header(); if(have_posts()): while(have_posts()):the_post();?>

<section>
    <?= the_title(); ?>
    <?= the_content(); ?>

    <?php if(comments_open()) : ?>
        <div class="comments-container">
            <?php comments_template(); ?> 
        </div>
    <?php endif; ?>
</section>

<?php endwhile; endif; get_footer(); ?>
