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
      <?php if ($display_submitted): ?>
        <span class="date"><?php print format_date($node->changed, 'short'); ?></span>
      <?php endif; ?>
    <?php endif; ?>

    <?php if ($unpublished): ?>
      <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
    <?php endif; ?>
  </header>

  <ul class="versus clearfix">

    <li class="6u versus-left">
      <?php print render($content['field_watch']); ?>
    </li>

    <!-- Sidebar -->
    <li class="6u versus-right">
      <?php print render($content['field_versus_watch']); ?>
    </li>

  </ul>


  <ul class="actions">
    <li><a href="<?php print url('node/' . $node->nid); ?>" class="button icon fa-compress"><?php print t('Learn More'); ?></a></li>
  </ul>
</article>
