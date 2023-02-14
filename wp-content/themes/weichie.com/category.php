<?php get_header(); ?>
<section id="content" >
    <header class="header">
        <h1 class="entry-title"><?php _e( 'Category Archives: ', 'weichie' ); ?><?php single_cat_title(); ?></h1>
        <?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
    </header>
    <?php if ( have_posts() ) {
        while ( have_posts() ) { the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
        <?php } ?>
    <?php } ?>
    <?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
