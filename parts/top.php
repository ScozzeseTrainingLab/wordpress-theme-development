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