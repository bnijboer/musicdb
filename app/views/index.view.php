<?php require 'partials/header.php'; ?>

<h1>Hi <?= $user ?>, welcome to my MusicDB</h1>

<form method="POST" action="/tracks">
      <input type="text" name="artist" placeholder="Artist">
      <input type="text" name="title" placeholder="Title">
      <input type="text" name="genre" placeholder="Genre">
      <input type="submit" value="Add to database">
</form>

<?php require 'partials/footer.php'; ?>