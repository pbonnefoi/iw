<?php
/**
 * @file
 * Returns the HTML for the homepage.
 */
?>
<div id="homepage-top">
  <?php foreach ($rows as $row_key => $row): ?>
    <div class="row">
      <?php foreach ($row as $node): ?>
        <div class="<?php print $node->type == 'article' ? '8u' : '4u'; ?>">
          <?php $node_view = node_view($node, 'teaser'); ?>
          <?php print render($node_view); ?>
        </div>
      <?php endforeach ?>
      <?php if ($row_key == 1): ?>
        <div class="4u">
          <div id="instagram">
            <h2 class="block__title block-title"><?php print $instagram_block['instagram_block_instagram_block']['#block']->title; ?></h2>
            <ul id="instagram-feed" class="clearfix">
              <?php foreach ($instagram_block['instagram_block_instagram_block']['children'] as $key => $instagram_block_image): ?>
                <li class="4u">
                  <div class="image">
                    <a class="group" target="blank_" rel="group1" href="<?php print $instagram_block_image['#href']; ?>">
                      <img style="float: left; margin: 0 5px 5px 0px; width: <?php print $instagram_block_image['#width']; ?>px; height: <?php print $instagram_block_image['#height']; ?>px;" src="<?php print $instagram_block_image['#src']; ?>">
                    </a>
                  </div>
                </li>
              <?php endforeach ?>
            </ul>
          </div>
          <div id="find-us">
            <h2 class="block__title block-title"><?php print t('Find us'); ?></h2>
            <div class="icons clearfix">
              <a href="https://twitter.com/Iconic_Watches" class="icon twitter fa-twitter 3u" target="_blank"><span><?php print t('Twitter'); ?></span></a>
              <a href="https://www.facebook.com/iconicwatchesblog" class="icon facebook fa-facebook 3u" target="_blank"><span><?php print t('Facebook'); ?></span></a>
              <a href="http://www.pinterest.com/iconicwatches/" class="icon pinterest fa-pinterest 3u" target="_blank"><span><?php print t('Pinterest'); ?></span></a>
              <a href="https://www.google.com/+Iconicwatchesblog" class="icon google-plus fa-google-plus 3u" target="_blank"><span><?php print t('Google+'); ?></span></a>
            </div>
          </div>
        </div>
      <?php endif ?>
    </div>
  <?php endforeach ?>
</div>
<div id="brands">
  <?php foreach ($brands_row as $key_brands_row => $brands): ?>
    <div class="row brands-line">
      <?php $brands_split = array_chunk($brands, 3) ?>
      <?php foreach ($brands_split as $key_brands => $brands): ?>
        <div class="4u three-brand-block">
          <ul<?php print $key_brands == 2 ? ' class="last"' : ''; ?>>
            <?php foreach ($brands as $brand): ?>
              <li class="4u">
                <?php $term_view = taxonomy_term_view($brand, 'teaser'); ?>
                <?php print render($term_view); ?>
              </li>
            <?php endforeach ?>
            <?php if ($key_brands_row == 2 && $key_brands == 2): ?>
              <li class="4u last">
                <a href="<?php print url('brands'); ?>">
                  <?php print ('More brands'); ?>
                </a>
              </li>
            <?php endif ?>
          </ul>
        </div>
      <?php endforeach ?>
    </div>
  <?php endforeach ?>
</div>
