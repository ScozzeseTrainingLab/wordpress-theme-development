<?php

add_action('after_setup_theme', function () {
  register_nav_menu('main', 'Menu principale');
});

require_once('libs/wp_bootstrap_navwalker.php');
