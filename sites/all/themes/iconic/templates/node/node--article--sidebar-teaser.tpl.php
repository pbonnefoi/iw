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
<article class="box excerpt node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <header>
    <?php if ($title): ?>
      <h3<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
      <span class="date"><?php print format_date($node->changed, 'short'); ?></span>
    <?php endif; ?>

    <?php if ($unpublished): ?>
      <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
    <?php endif; ?>
  </header>

  <a href="<?php print url('node/' . $node->nid); ?>" class="image featured">
    <?php print render($content['field_image']); ?>
  </a>

  <ul class="actions">
    <li><a href="<?php print url('node/' . $node->nid); ?>" class="button icon fa-file-text"><?php print t('Learn More'); ?></a></li>
  </ul>

</article>
