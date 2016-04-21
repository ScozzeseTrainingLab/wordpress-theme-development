<?php /* Template Name: Add Book */ ?>



<?php

if (!empty($_POST['book_title']) && !empty($_POST['book_author'])) {
  $message = '"' . $_POST['book_title'] . '" è stato aggiunto al database';
}

?>



<?php get_header(); ?>


<div class="container">

  <h1>Add Book</h1>

  <div class="row">
    <div class="col-sm-8">

      <?php if (!empty($message)): ?>
      <blockquote class="bg-success">
        <p><?php echo esc_html($message); ?></p>
      </blockquote>
      <?php endif; ?>

      <form action="<?php get_permalink(); ?>" method="post">
        <div class="form-group">
          <label for="book_title">Titolo</label>
          <input type="text" class="form-control" name="book_title" id="book_title" placeholder="Book Title">
        </div>
        <div class="form-group">
          <label for="book_author">Autore</label>
          <input type="text" class="form-control" name="book_author" id="book_author" placeholder="Author name">
        </div>
        <div class="checkbox">
          <label>
            <input value="on" type="checkbox"> Disponibile
          </label>
        </div>
        <button type="submit" class="btn btn-default">Aggiungi</button>
      </form>

    </div>
  </div>

</div>


<?php get_footer(); ?>

