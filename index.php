<?php get_header(); ?>


<div class="container">

  <div class="row">

    <div class="col-md-3">

      <h3>Menu</h3>

      <?php

        wp_nav_menu(array(
          'menu' => 'main'
        ));

      ?>

    </div>


    <div class="col-md-9">

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

  </div>

</div>


<?php get_footer(); ?>
