<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
  <nav id="header" class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand ml-3 ml-lg-5" href="<?php echo home_url() ?>">Quality<span>Professional</span></a>
      <button class="navbar-toggler border-0 p-0 mr-3" type="button" data-toggle="collapse" data-target="#qualityproNav" aria-controls="qualityproNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse mr-lg-5" id="qualityproNav">
        <?php wp_nav_menu( array( 'theme_location' => 'qualitypro', 'container' => '', 'menu_id' => '', 'menu_class' => 'navbar-nav ml-auto', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker' => new WP_Bootstrap_Navwalker() ) ); ?>
      </div>
    </div>
  </nav>
  <main>
