<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
$current_url = url('node/' . $node->nid, array('absolute' => TRUE));
?>
<!-- Post -->
<article class="box post node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <header>
    <?php if ($title): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
<!--         <?php if ($display_submitted): ?>
          <li class="date">
            <?php print format_date($node->changed, 'short'); ?>
          </li>
        <?php endif; ?> -->
      <div class="links inline social-sharing icons">
        <!-- Twitter -->
        <a href="http://twitter.com/home?status=<?php print $node->title . ' ' . $current_url; ?>" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
         <!-- Facebook -->
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php print $current_url; ?>" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
        <!-- Google+ -->
        <a href="https://plus.google.com/share?url=<?php print $current_url; ?>" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-google-plus"></i><span>Google+</span></a>
      </div>
    <?php endif; ?>

    <?php if ($unpublished): ?>
      <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
    <?php endif; ?>
  </header>

  <div class="image featured">
    <?php print render($content['field_image']); ?>
  </div>

  <h3><?php print render($content['field_subtitle']); ?></h3>

  <div class="article-body">
    <?php print render($content['body']); ?>
  </div>

  <?php if (isset($content['field_more_images']['#items']) && $content['field_more_images']['#items']): ?>
    <div class="row">
      <?php foreach ($content['field_more_images']['#items'] as $key_image => $image): ?>
        <div class="6u">
          <div class="image featured">
            <?php print render($content['field_more_images'][$key_image]); ?>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  <?php endif; ?>

  <div class="row-watches grid-view">
    <?php foreach ($watches as $id => $watch): ?>
      <div class="item watch 4u">
        <?php print render($watch); ?>
      </div>
    <?php endforeach; ?>
  </div>

</article>
