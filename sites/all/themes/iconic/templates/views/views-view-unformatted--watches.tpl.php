<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="row-watches grid-view">
  <?php foreach ($rows as $id => $row): ?>
    <div class="item watch 3u">
      <?php print $row; ?>
    </div>
  <?php endforeach; ?>
</div>
