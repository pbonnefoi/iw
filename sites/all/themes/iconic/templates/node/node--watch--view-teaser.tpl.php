<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
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
        <h3 class="grid-title"><?php print $node->title; ?></h3>
      </a>
      <?php print render($content['field_watch_reference']); ?>
    </div>
    <span class="grid-learn-more">
      <a href="<?php print url('node/' . $node->nid); ?>">
        <span><?php print t('Learn more'); ?></span>
      </a>
    </span>
  </div>
</div>
