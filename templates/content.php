<article <?php post_class(); ?>>
  <header>
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="row">
  <div class="col-md-3 sub-header text-right entry-summary">
    <?php the_excerpt(); ?>
  </div>
  <div class="col-md-6 twoColumns entry-summary">
    <?php the_excerpt(); ?>
  </div>
  <div class="col-md-3">
    <?php  ?>
  </div>
  </div>
</article>
