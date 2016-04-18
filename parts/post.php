<div class="col-md-6">

  <?php if (has_post_thumbnail()): ?>

    <div class="jumbotron" style="background:center no-repeat url(<?php the_post_thumbnail_url(); ?>); background-size:cover">
      <h3 style="background-color:rgba(255, 255, 255, 0.5);"><?php the_title(); ?></h3>
    </div>

  <?php else: ?>

    <h3><?php the_title(); ?></h3>

  <?php endif; ?>

  <p><?php the_excerpt(); ?></p>

  <p>
    <a class="btn btn-default" href="<?php the_permalink(); ?>">Read more</a>
  </p>

</div>