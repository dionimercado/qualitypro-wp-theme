<?php get_header() ?>

<section id="home-slider">
  <?php echo do_shortcode( '[rev_slider alias="home-sllider"]' ) ?>
  <div class="container">
    <div class="row">
      <div class="col-md-7 mx-auto">
        <div class="letstalk">
          <span>Hello</span>
          <h3><?php _e( 'Let\'s have a conversation' ) ?></h3>
          <p>Call us at <a href="tel:+12017970590"><?php _e( '(201) 797-0590' ) ?></a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="welcome" class="welcome bg-white text-center">
  <header class="block-header">
  </header>
  <div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <h2 class="mb-4 mb-lg-5"><?php _e( 'Your new job starts right here.' ) ?></h2>
        <p>Hey, you deserve a chance to find a good job. To work on your terms. To better your situation. To be appreciated. To be a provider. Now, maybe you've tried staffing agencies before. But this is different. We have thousands of jobs across the country. And you just need one good one. So, what are you waiting for? Find it today and get to work!</p>
      </div>
    </div>
  </div>
</section>

<section id="testimonials" class="testimonials bg-light border-top text-center">
  <header class="block-header">
    <h2><?php _e( 'Testimonials' ) ?></h2>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="owl-testimonials owl-carousel owl-theme">
          <?php
            $events = new WP_Query( array( 'post_type' => 'testimonial', 'showposts' => 3, 'orderby' => 'rand' ) );
            while( $events->have_posts() ) : $events->the_post();
          ?>
          <div>
            <div class="testimonial testimonial-single">
              <div class="author-box">
                <span class="avatar">
                  <?php
                  if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                  }
                  else {
                      echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/no-avatar.gif" />';
                  }
                  ?>
                </span>
              </div>
              <div class="testimonial-holder text-center text-lg-left">
                <blockquote>
                  <?php the_content() ?>
                </blockquote>
                <div class="author-info">
                  <h6 class="author-name"><?php the_title() ?></h6>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata() ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="testimonials" class="testimonials bg-white border-top text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php echo do_shortcode( '[instashow id="1"]' ) ?>
      </div>
    </div>
  </div>
</section>

<section id="get-started" class="get-started text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Get Started Today</h2>
        <p>Post your free job and find talented contractors for your projects. All 100% free.</p>
        <a href="#" class="btn btn-outline-light">Apply Now</a>
        <a href="#" class="btn btn-outline-light">Make a call</a>
      </div>
    </div>
  </div>
</section>


<?php get_footer() ?>
