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
      <ul class="links inline social-sharing">
        <?php if ($display_submitted): ?>
          <li class="date">
            <?php print format_date($node->changed, 'short'); ?>
          </li>
        <?php endif; ?>
        <li class="pinit-button">
          <?php print render($content['links']); ?>
        </li>
        <li class="facebook-button">
          <?php print render($content['facebookshare']); ?>
        </li>
        <li class="tweet-button">
          <?php print render($content['field_tweet_button']); ?>
        </li>
      </ul>
    <?php endif; ?>
    <?php if ($unpublished): ?>
      <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
    <?php endif; ?>
  </header>
  <div class="watch-attributes-wrapper row">
    <div class="7u">
      <span class="image featured"><?php print render($content['field_watch_picture']); ?></span>
    </div>
    <div class="5u">
      <ul class="attributes icons">
        <li class="image logo">
          <a href="<?php print url('taxonomy/term/' . $brand_tid); ?>"><?php print render($brand_logo); ?></a>
        </li>
        <li class="trophy">
          <?php if (isset($content['field_award_category']) && $content['field_award_category']): ?>
            <?php print render($content['field_date_award']); ?>
            <span class="icon fa-trophy"></span>
            <span class="icon <?php print render($font_awsome_icon); ?>"></span>
          <?php endif ?>
        </li>
        <li class="icon fa-tag"><span><?php print t('Reference') ?> : </span><?php print render($content['field_watch_reference']); ?></li>
        <li class="icon fa-cog"><span><?php print t('Caliber') ?> : </span><?php print render($content['field_caliber']); ?></li>
        <li class="icon fa-arrows-h"><span><?php print t('Diameter') ?> : </span><?php print render($content['field_diameter']); ?></li>
        <li class="icon fa-tint"><span><?php print t('Water Resistant') ?> : </span><?php print render($content['field_water_resistant']); ?></li>
        <li class="icon fa-calendar"><span><?php print t('Production Date') ?> : </span><?php print render($content['field_production_year']); ?></li>
        <?php if (isset($content['field_price_new']) && $content['field_price_new']): ?>
          <li class="icon fa-money"><span><?php print t('Price used') ?> : </span><?php print render($content['field_price_new']); ?>€</li>
        <?php endif ?>
        <?php if (isset($content['field_price_used_low']) && $content['field_price_used_low']): ?>
          <li class="icon fa-money"><span><?php print t('Price used') ?> : </span><?php print render($content['field_price_used_low']); ?>€ / <?php print render($content['field_price_used_high']); ?>€</li>
        <?php endif ?>
      </ul>
      <div>
        <?php if (isset($content['field_watch_description']) && $content['field_watch_description']): ?>
          <?php print render($content['field_watch_description']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</article>
