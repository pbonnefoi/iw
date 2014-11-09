<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<div class="grid-picture">
  <a href="<?php print url('node/' . $node->nid); ?>" class="image featured">
    <?php print render($content['field_watch_picture']); ?>
  </a>
</div>
<div class="grid-roll-wrapper">
  <div class="grid-roll">
    <div class="brand">
      <a href="<?php print url('taxonomy/term/' . $brand_tid); ?>">
        <?php print render($brand_logo); ?>
      </a>
    </div>
    <div class="captions">
      <h3 class="grid-title"><?php print $title; ?></h3>
    </div>
    <span class="grid-learn-more">
      <a href="<?php print url('node/' . $node->nid); ?>">
        <span><?php print t('Learn more'); ?></span>
      </a>
    </span>
  </div>
</div>
