<?php require 'partials/header.php'; ?>

<?php if($searchQuery) : ?>
      <h1>Search results for "<?= $searchQuery ?>"</h1>
<?php else : ?>
      <h1>All tracks</h1>
<?php endif; ?>

<?php if(empty($tracks)) : ?>
      Your search for "<?= $searchQuery ?>" returned no results.
<?php else : ?>
      <ul>
            <?php foreach($tracks as $track) : ?>
                  <li><?= "{$track->artist} - {$track->title} - {$track->genre}"; ?></li>
            <?php endforeach; ?>
      </ul>
<?php endif; ?>

<?php require 'partials/footer.php'; ?>