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
      <span><?php print render($content['field_brand']); ?></span>
      <h3<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
      <?php if ($display_submitted): ?>
        <span class="date desktop-only"><?php print format_date($node->changed, 'short'); ?></span>
      <?php endif; ?>
    <?php endif; ?>

    <?php if ($unpublished): ?>
      <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
    <?php endif; ?>
  </header>
  <div class="watch-attributes-wrapper watch-attributes">
    <span class="image featured image-watch"><?php print render($content['field_watch_picture']); ?></span>
  </div>
</article>
