<?php get_header() ?>

<section class="blog-section">

  <div class="container">
    <div class="row">
      <div class="col-12">
        <header class="block-header text-left">
          <h2><?php _e( 'Blog' ) ?></h2>
        </header>
      </div>
    </div>
    <div class="row">
      <?php while( have_posts() ) : the_post(); ?>

      <div class="col-4">
        <div class="card mb-5">
          <a data-fancybox="" data-type="ajax" data-src="<?php the_permalink() ?>" href="javascript:;">
            <?php
            if( has_post_thumbnail() ) :
              the_post_thumbnail( 'medium', array( 'class' => 'img-fluid card-img-top' ) );
            endif;
            ?>
          </a>
          <div class="card-body">
            <h3 class="card-title"><a data-fancybox="" data-type="ajax" data-src="<?php the_permalink() ?>" href="avascript:;"><?php the_title() ?></a></h3>
            <div class="card-text"><?php the_excerpt() ?></div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
</section>

<?php get_footer() ?>
