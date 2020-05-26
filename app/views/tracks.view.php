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
                  <th>Release</th>
                  <th>Style(s)</th>
                  <th>Genre</th>
                  <th>Notes</th>
                  <th>In collection</th>
            </tr>
            <?php foreach($tracks as $track) : ?>
            <tr>
                  <td><?= $track->artist; ?></td>
                  <td><a href="http://www.google.com/search?q=<?= str_replace(array(" ", "&", "="), '+', $track->artist); ?>+<?= str_replace(array(" ", "&", "="), '+', $track->title); ?>+<?= str_replace(array(" ", "&", "="), '+', $track->record); ?>" target="_blank"><?= $track->title; ?></a></td>
                  <td><?= $track->record; ?></td>
                  <td><?= $track->style; ?></td>
                  <td><?= $track->genre; ?></td>
                  <td><?= $track->notes; ?></td>
                  <?php if($track->fileLocated !== NULL) : ?>
                        <td><?= $track->fileLocated; ?></td>
                  <?php endif; ?>
            </tr>
            <?php endforeach; ?>
      </table>
<?php endif; ?>
</div>

<?php require 'partials/footer.php'; ?>