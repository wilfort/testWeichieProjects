<article>
   <a href="<?= get_the_permalink(); ?>">
      <div class="cover" style="background-image: url('<?= get_the_post_thumbnail_url(); ?>');">

      </div>
      <div class="content">
         <h2><?= the_title(); ?></h2>
         <?= the_excerpt(); ?>

         <span class="read-more">Read more</span>
      </div>
</article>
