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
      <div class="image logo">
        <a href="<?php print $brand_tid; ?>"><?php print render($brand_logo); ?></a>
      </div>
      <h3<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
      <?php if ($display_submitted): ?>
        <span class="date"><?php print format_date($node->changed, 'short'); ?></span>
      <?php endif; ?>
    <?php endif; ?>

    <?php if ($unpublished): ?>
      <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
    <?php endif; ?>
  </header>
  <div class="watch-attributes-wrapper">
    <span class="image featured"><?php print render($content['field_watch_picture']); ?></span>
    <ul class="attributes icons">
      <li class="icon fa-tag"><span><?php print t('Reference') ?> : </span><?php print render($content['field_watch_reference']); ?></li>
      <li class="icon fa-cog"><span><?php print t('Caliber') ?> : </span><?php print render($content['field_caliber']); ?></li>
      <li class="icon fa-arrows-h"><span><?php print t('Diameter') ?> : </span><?php print render($content['field_diameter']); ?></li>
      <li class="icon fa-tint"><span><?php print t('Water Resistant') ?> : </span><?php print render($content['field_water_resistant']); ?></li>
      <li class="icon fa-calendar"><span><?php print t('Production Date') ?> : </span><?php print render($content['field_production_year']); ?></li>
      <?php if (isset($content['field_price_used_low']) && $content['field_price_used_low']): ?>
        <li class="icon fa-money"><span><?php print t('Price used') ?> : </span><?php print render($content['field_price_used_low']); ?> / <?php print render($content['field_price_used_high']); ?></li>
      <?php endif ?>
    </ul>
  </div>
</article>
