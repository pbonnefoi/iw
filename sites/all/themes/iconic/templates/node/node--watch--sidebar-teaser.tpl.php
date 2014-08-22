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
      <h3<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
      <?php if ($display_submitted): ?>
        <span class="date"><?php print format_date($node->changed, 'short'); ?></span>
      <?php endif; ?>
    <?php endif; ?>
  </header>
  <a href="<?php print url('node/' . $node->nid); ?>" class="image left">
    <?php print render($content['field_watch_picture']); ?>
  </a>
  <p>Phasellus  sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
  viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
  convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
  facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
</article>
