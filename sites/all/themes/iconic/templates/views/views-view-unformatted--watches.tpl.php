<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
$arg = arg();
$class = '4u';
if (drupal_is_front_page() || (count($arg) == 1 && $arg[0] == 'watches')) {
  $class = '3u';
}
?>
<div class="row-watches grid-view">
  <?php foreach ($rows as $id => $row): ?>
    <div class="item watch <?php print $class; ?>">
      <?php print $row; ?>
    </div>
  <?php endforeach; ?>
</div>
