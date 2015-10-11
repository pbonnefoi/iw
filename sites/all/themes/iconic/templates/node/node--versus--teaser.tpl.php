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

  <div class="grid-view">
    <div class="item 6u picture-left">
      <?php $node_view = node_view($watch_node, 'view_teaser'); ?>
      <?php $node_view['field_watch_picture'][0]['#image_style'] = 'half_watch_left'; ?>
      <?php print render($node_view); ?>
    </div>
    <div class="item 6u picture-right">
      <?php $node_view = node_view($versus_watch_node, 'view_teaser'); ?>
      <?php $node_view['field_watch_picture'][0]['#image_style'] = 'half_watch_right'; ?>
      <?php print render($node_view); ?>
    </div>
  </div>

  <ul>
    <?php if ($brand_tid == $brand_versus_tid): ?>
      <li class="12u logo">
        <a href="<?php print url('taxonomy/term/' . $brand_tid); ?>"><?php print render($brand_logo); ?></a>
      </li>
    <?php else: ?>
      <li class="6u logo">
        <a href="<?php print url('taxonomy/term/' . $brand_tid); ?>"><?php print render($brand_logo); ?></a>
      </li>
      <li class="6u logo">
        <a href="<?php print url('taxonomy/term/' . $brand_versus_tid); ?>"><?php print render($brand_versus_logo); ?></a>
      </li>
    <?php endif ?>
  </ul>
</article>
