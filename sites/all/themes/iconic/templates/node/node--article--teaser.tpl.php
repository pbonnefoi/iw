<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<!-- Post -->
<article class="box post node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <header>
    <?php if ($title): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php if ($display_submitted): ?>
        <div class="date"><?php print format_date($node->changed, 'short'); ?></div>
      <?php endif; ?>
    <?php endif; ?>

    <?php if ($unpublished): ?>
      <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
    <?php endif; ?>
  </header>

  <div class="image featured">
    <?php print render($content['field_image']); ?>
  </div>

  <h3><?php print render($content['field_subtitle']); ?></h3>

  <?php print render($content['body']); ?>

  <ul class="actions">
    <li><a href="<?php print url('node/' . $node->nid); ?>" class="button icon fa-file-text"><?php print t('Learn more'); ?></a></li>
  </ul>

</article>
