<?php get_header(); ?>


<div class="container">

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
