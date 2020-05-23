<?php require 'partials/header.php'; ?>

<div class="page-container">
      <h1>Hi <?= $user; ?>, add some music to your collection!</h1>

      <div id="form-container">
            <form method="POST" action="/tracks">
                  <input type="text" name="artist" placeholder="Artist" required>
                  <input type="text" name="title" placeholder="Title" required>
                  <input type="text" name="genre" placeholder="Style">
                  <div><input id="insert-button" class="button" type="submit" value="Add"></div>
            </form>
      </div>
</div>

<?php require 'partials/footer.php'; ?>