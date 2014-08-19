<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="row">
  <?php foreach ($rows as $id => $row): ?>
    <div class="brand 4u">
      <?php print $row; ?>
    </div>
  <?php endforeach; ?>
</div>
