<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class() ?>>

  <section class="blog-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php while( have_posts() ) : the_post(); ?>
            <div class="post mb-5">
                <?php
                if( has_post_thumbnail() ) :
                  the_post_thumbnail( 'large', array( 'class' => 'img-fluid card-img-top' ) );
                endif;
                ?>
                <div class="post-body">
                  <h2 class="post-title"><?php the_title() ?></h2>
                  <?php the_content() ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>

        </div>
      </div>
    </section>

</body>
</html>
