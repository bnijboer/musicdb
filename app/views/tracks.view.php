<?php require 'partials/header.php'; ?>

<h1>Tracks overview</h1>

<form method="POST" action="/tracks">
      <input type="text" name="artist" placeholder="artist">
      <input type="text" name="title" placeholder="title">
      <input type="text" name="genre" placeholder="genre">
      <button type="submit">Submit</button>
<form>

<ul>
      <?php foreach ($tracks as $track) : ?>
            <li><?= "{$track->artist} - {$track->title} - {$track->genre}"; ?></li>
      <?php endforeach ?>
</ul>

<?php require 'partials/footer.php'; ?>