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
      <div class="trophy">
        <?php print render($content['field_date_award']); ?>
        <span class="icon fa-trophy"></span>
        <span class="icon fa-anchor <?php print '' ?>"></span>
      </div>
      <h2><a href="<?php print $node_url; ?>"><?php print t('The') ?> <?php print $title; ?> - <?php print render($content['field_watch_reference']); ?> <?php print render($content['field_date_award']); ?> <?php print render($content['field_award_category']); ?> <?php print variable_get('site_name', t('Iconic Watch.')) . ' ' . t('award'); ?></a></h2>
    <?php endif; ?>

    <?php if ($unpublished): ?>
      <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
    <?php endif; ?>
  </header>

  <?php print render($content['field_watch']); ?>

</article>
