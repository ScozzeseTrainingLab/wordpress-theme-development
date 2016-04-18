<!DOCTYPE html>
<html>
  <head>
    <?php wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/jquery-1.12.3.min.js'); ?>
    <?php wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery')); ?>
    <?php wp_enqueue_script('script', get_template_directory_uri() . '/assets/script.js', array('jquery')); ?>

    <?php wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css'); ?>
    <?php wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css'); ?>
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
  </head>
  <body>
    <div id="top-placeholder"></div>

    <div id="top">

      <div class="container">
        <div class="row">

          <?php

            wp_nav_menu(array(
              'menu' => 'main',
              'theme_location' => 'main',
              'depth' => 3,
              'container' => 'div',
              'container_class' => 'collapse navbar-collapse',
              'container_id' => 'bs-example-navbar-collapse-1',
              'menu_class' => 'nav navbar-nav',
              'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
              'walker' => new wp_bootstrap_navwalker()
            ));

          ?>

        </div>
      </div>
    </div>
