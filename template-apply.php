<?php
/* Template Name: Apply */
get_header()
?>

<section class="signup-page bg-light">
  <div class="header text-center" style="padding: 100px 0 180px 0;">
    <h1 class="mb-3">Job Application</h1>
    <p>Please fill out the form below and we will get in touch with you shortly with some job offers.</p>
  </div>
  <div class="signup-form">
    <div class="container">
      <div class="form-content p-5" style="max-width: 900px">
        <div class="row">
          <div class="col-12">
            <div class="pt-4 pl-md-4 pl-md-4 pr-md-0 pt-md-4 pl-lg-5 pr-lg-4 pt-lg-4 pb-lg-0">
              <?php while( have_posts() ) : the_post() ?>
                <?php the_content() ?>
              <?php endwhile ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<?php get_footer() ?>
