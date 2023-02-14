<?php get_header(); ?>
<section id="content" >
    <header class="header">
        <h1 class="entry-title">Tag Archives: <?php single_tag_title(); ?></h1>
    </header>
    <?php if(have_posts()): ?>
        <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part('_components/entry'); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php get_footer(); ?>
