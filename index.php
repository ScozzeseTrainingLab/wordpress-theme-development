<?php get_header(); ?>


<div class="container">

  <div class="jumbotron">
    <h1>Training Lab</h1>
    <p>This website is a simple demo</p>
  </div>

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
