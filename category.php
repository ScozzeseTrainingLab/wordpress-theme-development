<?php get_header(); ?>

<div class="container">

  <div class="jumbotron">
    <h1><?php single_term_title(); ?></h1>
  </div>

  <div class="row">

    <?php

    while (have_posts()) {
      the_post();
      get_template_part('parts/post');
    }

    ?>

  </div>

  <div class="row">

    <?php get_template_part('parts/navigation'); ?>

  </div>


</div>


<?php get_footer(); ?>
