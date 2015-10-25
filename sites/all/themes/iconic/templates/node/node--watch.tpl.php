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
      <h2<?php print $title_attributes; ?>><?php print render($content['field_brand']); ?> <a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <div class="links inline social-sharing icons">
        <!-- Twitter -->
        <a href="http://twitter.com/home?status=<?php print $node->title . ' ' . $current_url; ?>" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
         <!-- Facebook -->
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php print $current_url; ?>" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
        <!-- Google+ -->
        <a href="https://plus.google.com/share?url=<?php print $current_url; ?>" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-google-plus"></i><span>Google+</span></a>
      </div>
    <?php endif; ?>
    <?php if ($unpublished): ?>
      <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
    <?php endif; ?>
  </header>

  <div class="watch-attributes-wrapper">
    <div class="watch-image-attributes-wrapper row">
      <div class="7u">
        <span class="image featured image-watch"><?php print render($content['field_watch_picture']); ?></span>
      </div>
      <div class="5u">
        <ul class="attributes icons watch-attributes">
          <li class="logovote-wrapper">
            <ul class="logovote">
              <li class="6u logo">
                <a href="<?php print url('taxonomy/term/' . $brand_tid); ?>"><?php print render($brand_logo); ?></a>
              </li>
              <li class="6u vote">
                <?php print render($content['plus1_widget']); ?>
              </li>
            </ul>
          </li>
          <?php if (isset($content['field_award_category']) && $content['field_award_category']): ?>
            <li class="trophy">
              <span class="icon trophy-name"><?php print $award_category_name; ?></span>
              <span class="icon fa-trophy"></span>
              <?php print render($content['field_date_award']); ?>
            </li>
          <?php endif ?>
          <li class="icon fa-tag"><span><?php print t('Reference') ?> : </span><?php print render($content['field_watch_reference']); ?></li>
          <li class="icon fa-cog"><span><?php print t('Caliber') ?> : </span><?php print render($content['field_caliber']); ?></li>
          <li class="icon fa-arrows-h"><span><?php print t('Diameter') ?> : </span><?php print render($content['field_diameter']); ?></li>
          <?php if (isset($content['field_water_resistant']) && $content['field_water_resistant']): ?>
            <li class="icon fa-tint"><span><?php print t('Water Resistant') ?> : </span><?php print render($content['field_water_resistant']); ?></li>
          <?php endif ?>
          <li class="icon fa-calendar"><span><?php print t('Production Date') ?> : </span><?php print render($content['field_production_year']); ?></li>
          <?php if (isset($content['field_price_new']) && $content['field_price_new']): ?>
            <li class="icon fa-money"><span><?php print t('Price new') ?> : </span><?php print render($content['field_price_new']); ?>€</li>
          <?php endif ?>
          <?php if (isset($content['field_price_used_low']) && $content['field_price_used_low']): ?>
            <li class="icon fa-money"><span><?php print t('Price used') ?> : </span><?php print render($content['field_price_used_low']); ?>€ / <?php print render($content['field_price_used_high']); ?>€</li>
          <?php endif ?>
        </ul>
      </div>
    </div>
    <div class="watch-description 12u">
      <?php if (isset($content['field_watch_description']) && $content['field_watch_description']): ?>
        <?php print render($content['field_watch_description']); ?>
      <?php endif; ?>
    </div>
  </div>

  <?php if (isset($content['field_more_images']['#items']) && $content['field_more_images']['#items']): ?>
    <div class="row">
      <?php foreach ($content['field_more_images']['#items'] as $key_image => $image): ?>
        <div class="6u">
          <div class="image featured">
            <?php print render($content['field_more_images'][$key_image]); ?>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  <?php endif ?>

  <?php if (isset($related_articles) && $related_articles): ?>
    <div class="row related-articles">
      <?php foreach ($related_articles as $key_article => $article): ?>
        <div class="6u">
          <?php print render(node_view(node_load($article->entity_id), 'teaser')); ?>
        </div>
      <?php endforeach ?>
    </div>
  <?php endif ?>

</article>
