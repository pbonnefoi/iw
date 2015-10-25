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
      <h3<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" titl="<?php print $title; ?>"><?php print $title; ?></a></h3>
    <?php endif; ?>

    <?php if ($unpublished): ?>
      <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
    <?php endif; ?>
  </header>

  <div class="image no-border featured">
    <a href="<?php print url('node/' . $node->nid); ?>" title="<?php print $title; ?>">
      <?php print render($content['field_image']); ?>
    </a>
  </div>

</article>
