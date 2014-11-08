<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="box highlight node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <header>
    <?php if ($title): ?>
      <h3<?php print $title_attributes; ?>><?php print render($content['field_brand']); ?> <a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
      <?php if ($display_submitted): ?>
        <span class="date"><?php print format_date($node->changed, 'short'); ?></span>
      <?php endif; ?>
    <?php endif; ?>
  </header>
  <a href="<?php print url('node/' . $node->nid); ?>" class="image left">
    <?php print render($content['field_watch_picture']); ?>
  </a>
  <?php if (isset($content['field_award_category']) && $content['field_award_category']): ?>
    <div class="trophy">
      <?php print render($content['field_date_award']); ?>
      <span class="icon fa-trophy"></span>
      <span class="icon <?php print render($font_awsome_icon); ?>"></span>
    </div>
  <?php endif ?>
  <?php if (isset($content['field_award_description']) && $content['field_award_description']): ?>
    <p><?php print render($content['field_award_description']); ?></p>
  <?php elseif (isset($content['field_watch_description']) && $content['field_watch_description']): ?>
    <p><?php print render($content['field_watch_description']); ?></p>
  <?php endif ?>
</article>
