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


  <?php if (has_post_thumbnail()): ?>

    <div class="jumbotron" style="background:center no-repeat url(<?php the_post_thumbnail_url(); ?>); background-size:cover">
      <h1 style="background-color:rgba(255, 255, 255, 0.5);"><?php the_title(); ?></h1>
    </div>

  <?php else: ?>

    <div class="jumbotron">
      <h1><?php the_title(); ?></h1>
    </div>

  <?php endif; ?>



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
