
<article class="entry" <?php post_class(); ?> >
  <div class="row">
    <header class="col-xl-7 col-lg-8 col-md-10 col-sm-12">
      <div class="row">
        <div class="col-lg-10 col-md-12 head-container"> <span class="entry-tags">
          <?php the_tags('', ' | '); ?>
          </span>
          <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h1>
        </div>
      </div>
      <!--
      <div class="entry-nav-arrows hidden-sm hidden-xs"> <a class="entry-up inactive" href="#"><i class="fa fa-angle-up"></i></a>  <a class="entry-down " href="#"><i class="fa fa-angle-down"></i></a>
      </div>
      -->
    </header>
  </div>
  <div class="row">
    <div class="col-lg-2 col-md-3">
      <div class="entry-excerpt text-right">
          <?php get_template_part( 'templates/entry-meta'); ?>
        <p class="">
          <b>
            <?php the_excerpt(); ?>
          </b>
        </p>
      </div>
    </div>
    <div class="col-lg-6 col-md-9">
      <div class="entry-content">
        <div class="entry-meta">
          <time class="entry-time" 
                class=" text-uppercase"
                datetime="<?= get_post_time('c', true); ?>">
            <?= get_the_date(); ?>
          </time>
        </div>
        <div class="row">
          <div class="col-md-12 visible-md visible-sm visible-xs">
            <figure class="entry-thumb">
              <a href="http://www.cssigniter.com/preview/tinos/an-abundance-of-materialisms-concerning-the-dialectic-paradigm-6/">
                <img src="http://www.cssigniter.com/preview/tinos/files/2014/01/unsplash_5244800b1ebf4_1-768x600.jpg" class="img-responsive" alt="An abundance of materialisms concerning the dialectic paradigm">
              </a>
              <figcaption>
                <p>An abundance of materialisms concerning the dialectic paradigm</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-12 two-columns">
              <?php the_excerpt(); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 hidden-md hidden-sm hidden-xs">
      <figure class="entry-thumb">
        <a href="http://www.cssigniter.com/preview/tinos/an-abundance-of-materialisms-concerning-the-dialectic-paradigm-6/">
          <img src="http://www.cssigniter.com/preview/tinos/files/2014/01/unsplash_5244800b1ebf4_1-768x600.jpg" class="img-responsive" alt="An abundance of materialisms concerning the dialectic paradigm">
        </a>
        <figcaption>
          <p>An abundance of materialisms concerning the dialectic paradigm</p>
        </figcaption>
      </figure>
    </div>
  </div>
</article>