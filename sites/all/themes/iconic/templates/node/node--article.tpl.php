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
      <ul class="links inline social-sharing">
        <?php if ($display_submitted): ?>
          <li class="date">
            <?php print format_date($node->changed, 'short'); ?>
          </li>
        <?php endif; ?>
        <li class="pinit-button">
          <?php print render($content['links']); ?>
        </li>
        <li class="facebook-button">
          <?php print render($content['facebookshare']); ?>
        </li>
        <li class="tweet-button">
          <?php print render($content['field_tweet_button']); ?>
        </li>
      </ul>
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

  <div class="row">
    <?php foreach ($content['field_more_images']['#items'] as $key_image => $image): ?>
      <div class="6u">
        <div class="image featured">
          <?php print render($content['field_more_images'][$key_image]); ?>
        </div>
      </div>
    <?php endforeach ?>
  </div>

  <div class="row-watches grid-view">
    <?php foreach ($watches as $id => $watch): ?>
      <div class="item watch 6u">
        <?php print render($watch); ?>
      </div>
    <?php endforeach; ?>
  </div>

</article>
