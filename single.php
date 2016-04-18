<?php get_header(); ?>

<?php the_post(); ?>

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


  <div class="jumbotron">
    <h1><?php the_title(); ?></h1>
  </div>


  <?php the_content(); ?>

  <div class="row">

    <div class="col-md-6">
      <?php previous_post_link(); ?>
    </div>
    <div class="col-md-6 text-right">
      <?php next_post_link(); ?>
    </div>

  </div>


</div>


<?php get_footer(); ?>
