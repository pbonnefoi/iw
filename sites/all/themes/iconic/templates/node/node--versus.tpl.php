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
        <?php if ($display_submitted): ?>
          <span class="date"><?php print format_date($node->changed, 'short'); ?></span>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
    <?php print render($content['body']); ?>

  </article>

  <div class="row">

    <!-- Content -->
    <div id="versus versus-left" class="6u">
      <?php print render($content['field_watch']); ?>
      <?php if ($pros_left): ?>
        <ul class="icons">
          <?php foreach ($pros_left as $key => $pl): ?>
            <li class="icon fa-plus"><?php print render($pl); ?></li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>
      <?php if ($cons_left): ?>
        <ul class="icons">
          <?php foreach ($cons_left as $key => $cl): ?>
            <li class="icon fa-minus"><?php print render($cl); ?></li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>
    </div>

    <!-- Sidebar -->
    <div id="versus versus-right" class="6u">
      <?php print render($content['field_versus_watch']); ?>
      <?php if ($pros_right): ?>
        <ul class="icons">
          <?php foreach ($pros_right as $key => $pr): ?>
            <li class="icon fa-plus"><?php print render($pr); ?></li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>
      <?php if ($cons_right): ?>
        <ul class="icons">
          <?php foreach ($cons_right as $key => $cr): ?>
            <li class="icon fa-minus"><?php print render($cr); ?></li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>
    </div>

  </div>

  <?php print render($content['field_versus_poll']); ?>
</div>
