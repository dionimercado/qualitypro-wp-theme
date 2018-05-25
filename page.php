<?php get_header() ?>

<section class="page-section">
  <header>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1><?php the_title() ?></h1>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php while( have_posts() ) : the_post(); ?>
          <div class="post mb-5">
            <div class="post-body">
              <?php the_content() ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>

    </div>
  </div>
</section>

<?php get_footer() ?>
