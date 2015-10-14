<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h2><?php print $title; ?></h2>
<?php endif; ?>
<div class="row-watches grid-view">
  <?php foreach ($rows as $id => $row): ?>
    <div class="item watch 6u">
      <?php $nid = preg_replace('/\s+/', '', $row); ?>
      <?php $node = node_load($nid); ?>
      <?php $node_view = node_view($node, 'teaser'); ?>
      <?php print render($node_view); ?>
    </div>
  <?php endforeach; ?>
</div>
