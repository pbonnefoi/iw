<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="box post node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <header>
    <?php if ($title): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php if ($display_submitted): ?>
      <p class="submitted">
        <?php print format_date($node->changed); ?>
      </p>
    <?php endif; ?>

    <?php if ($unpublished): ?>
      <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
    <?php endif; ?>
  </header>
  <div class="watch-attributes-wrapper">
    <span class="image featured"><?php print render($content['field_watch_picture']); ?></span>
    <span class="attributes"><?php print t('Water Resistant') ?> : </span><?php print render($content['field_water_resistant']); ?>
    <span class="attributes"><?php print t('Price used') ?> : </span><?php print render($content['field_price_used_low']); ?> / <?php print render($content['field_price_used_high']); ?>
  </div>
</article>
