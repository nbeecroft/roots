<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.5.3.min.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.7.2.min.js"><\/script>')</script>

  <?php roots_head(); ?>
  <?php wp_head(); ?>

</head>
<body <?php body_class('test', roots_body_class()); ?>>

  <!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <?php roots_header_before(); ?>
  <?php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header', 'top-navbar');
    } else {
      get_template_part('templates/header', 'default');
    }
  ?>
  <?php roots_header_after(); ?>

  <?php roots_wrap_before(); ?>
  
  <div class="sticky-wrapper">
    
  <?php if (is_front_page() ) { ?>
  <div id="masthead">
      <div class="container">
        <div class="row">
            <div class="span4 offset1">
                <h2>Hi, I'm Nick.</h2>
                <p>This is my personal site where I share (sometimes) useful information about my adventure on a quest for knowledge.</p>
                <p>You can dive right in to the <a href="#articles">articles</a> I've written, checkout my <a href="/assets/Nicolas_Beecroft-Sales_Resume.pdf">resume</a>, or <a href="#">get in touch with me.</a></p>
                <div class="alert alert-info">
                    <button class="close" data-dismiss="alert">&times;</button>
                    <strong>Heads up!</strong> This site is a work in progress; sorry about that.
                </div>
            </div>
            
        </div>
      </div>
  </div>
  <?php } ?>


	
  <div id="wrap" class="<?php echo WRAP_CLASSES; ?>" role="document">
