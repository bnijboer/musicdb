<?php require 'partials/header.php'; ?>

<div class="page-container">
<?php if($searchQuery) : ?>
      <h1>Search results for "<?= $searchQuery; ?>"</h1>
<?php else : ?>
      <h1>All tracks</h1>
<?php endif; ?>

<?php if(empty($tracks)) : ?>
      <div id="no-results">Your search for "<?= $searchQuery; ?>" returned no results.</div>
<?php else : ?>
      <table cellspacing="0" cellpadding="0">
            <tr>
                  <th>Artist</th>
                  <th>Title</th>
                  <th>Style</th>
                  <th>Google Search</th>
            </tr>
            <?php foreach($tracks as $track) : ?>
            <tr>
                  <td><?= $track->artist; ?></td>
                  <td><?= $track->title; ?></div>
                  <td><?= $track->genre; ?></div>
                  <td><a href="http://www.google.com/search?q=<?= str_replace(array(" ", "&", "="), '+', $track->artist); ?>+<?= str_replace(array(" ", "&", "="), '+', $track->title); ?>" target="_blank"><i class="fas fa-search"></i></a></td>
            </tr>
            <?php endforeach; ?>
      </table>
<?php endif; ?>
</div>

<?php require 'partials/footer.php'; ?>