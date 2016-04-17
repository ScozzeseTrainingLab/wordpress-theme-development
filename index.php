<?php

get_header();

while (have_posts()) {
  the_post();
  get_template_part('parts/post');
}

get_template_part('parts/navigation');

get_footer();
