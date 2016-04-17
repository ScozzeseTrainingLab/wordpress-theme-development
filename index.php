<?php

while (have_posts()) {
  the_post();
  the_title("<h3>", "</h3>");
}