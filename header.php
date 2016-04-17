<!DOCTYPE html>
<html>
  <head>
    <?php wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js'); ?>
    <?php wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css'); ?>
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
  </head>
  <body>