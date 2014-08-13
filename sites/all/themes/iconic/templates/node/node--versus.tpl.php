<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<div id="content">
  <article class="box post node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <header>
      <?php if ($title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print format_date($node->changed); ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
    <?php print render($content['body']); ?>

  </article>

  <div id="content" class="row">


    <!-- Content -->
    <div id="versus versus-left" class="6u">
      <?php print render($content['field_watch']); ?>
    </div>

    <!-- Sidebar -->
    <div id="versus versus-right" class="6u">
      <?php print render($content['field_versus_watch']); ?>
    </div>

  </div>
</div>
