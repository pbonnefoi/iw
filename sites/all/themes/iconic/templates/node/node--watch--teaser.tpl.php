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

  <div class="grid-view">
    <div class="item">
      <div class="grid-picture<?php print $class; ?>">
        <a href="<?php print url('node/' . $node->nid); ?>" class="image featured image-watch">
          <?php print render($content['field_watch_picture']); ?>
        </a>
      </div>
      <div class="grid-roll-wrapper">
        <div class="grid-roll<?php print $class; ?>">
          <div class="captions">
            <?php print render($content['field_brand']); ?><br />
            <a href="<?php print url('node/' . $node->nid); ?>">
              <h3 class="grid-title"><?php print $title; ?></h3>
            </a>
            <?php if (isset($content['field_award_category']) && $content['field_award_category']): ?>
              <span class="trophy icon <?php print render($font_awsome_icon); ?>"></span>
              <span class="trophy icon fa-trophy"></span><br />
            <?php endif ?>
            <?php print render($content['field_watch_reference']); ?>
          </div>
          <span class="grid-learn-more">
            <a href="<?php print url('node/' . $node->nid); ?>">
              <span><?php print t('Learn more'); ?></span>
            </a>
          </span>
        </div>
      </div>
    </div>
  </div>

  <ul class="logovote">
    <li class="6u logo">
      <a href="<?php print url('taxonomy/term/' . $brand_tid); ?>"><?php print render($brand_logo); ?></a>
    </li>
    <li class="6u vote">
      <?php print render($content['plus1_widget']); ?>
    </li>
  </ul>
</article>
