<?php
/* Template Name: Contact */
get_header()
?>

<section class="signup-page">
  <div class="header text-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3014.7615301695214!2d-74.11965518431093!3d40.92097433274087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2fb8f486b44e9%3A0xf0e179281a3f0dc!2s278+Broadway%2C+Elmwood+Park%2C+NJ+07407!5e0!3m2!1sen!2sus!4v1527040284403" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <div class="signup-form">
    <div class="container">
      <div class="form-content px-0 pt-0 pb-5 pb-md-0" style="max-width: 900px">
        <div class="row">
          <div class="col-md-7">
            <div class="pt-4 pl-md-4 pl-md-4 pr-md-0 pt-md-4 pl-lg-5 pr-lg-4 pt-lg-4 pb-lg-0">
              <h1><?php _e( 'Contact <span>Us</span>' ) ?></h1>
              <?php while( have_posts() ) : the_post() ?>
                <?php the_content() ?>
              <?php endwhile ?>
            </div>
          </div>
          <div class="col-md-5">
            <div class="bg-primary h-100 text-white p-4 p-lg-5 contact-info">
              <h4 class="mb-4"><?php _e( 'Contact Information' ) ?></h4>
              <p>
                278 Broadway<br />
                Elmwood Park, NJ
              </p>
              <p><a href="mailto:info@qualityprofessional.us"><i class="fas fa-envelope"></i> info@qualityprofessional.us</a></p>
              <p><a href="tel:+19176868373"><i class="fas fa-phone" style="transform: rotate(115deg);"></i> (201) 797-0590</a></p>
              <hr class="my-5" style="border-color: rgba(255,255,255,.1)" />
              <h4 class="mb-4"><?php _e( 'Office Hours' ) ?></h4>
              <p><i class="far fa-clock"></i> Monday – Friday 5am – 5pm</p>
              <p><i class="far fa-clock"></i> Saturday 7am – 4pm</p>
              <p><i class="far fa-clock"></i> Sunday <span class="text-white">closed</span></p>
              <hr class="my-5" style="border-color: rgba(255,255,255,.1)" />
              <h4 class="mb-4"><?php _e( 'Get in touch' ) ?></h4>
              <ul class="contact-socials list-inline">
                <li class="list-inline-item"><a href="https://www.facebook.com/aalstem" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="https://twitter.com/aalstem" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="https://www.instagram.com/aalstem/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCxuOV4gydwhmSVgN0OInMrQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li class="list-inline-item"><a href="https://www.linkedin.com/company/american-association-of-latinos-in-stem" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<?php get_footer() ?>
