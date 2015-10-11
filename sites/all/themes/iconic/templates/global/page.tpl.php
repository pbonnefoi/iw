<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<!-- Header -->
<div id="header-wrapper">
  <div id="header" class="container">

    <!-- Logo -->
    <h1 id="logo"><a href="<?php print url('<front>'); ?>"><?php print variable_get('site_name'); ?></a></h1>
    <div class="desktop-only">
      <p><?php print variable_get('site_slogan'); ?></p>
    </div>

    <!-- Nav -->
    <nav id="nav">
      <ul>
        <?php foreach ($main_menu as $key => $menu_item): ?>
          <li>
            <a <?php print isset($menu_item['link']['options']['attributes']) ? drupal_attributes($menu_item['link']['options']['attributes']) : ''; ?> href="<?php print url($menu_item['link']['link_path']); ?>"><span><?php print $menu_item['link']['link_title']; ?></span></a>
            <?php if ($menu_item['below']): ?>
              <ul>
              <?php foreach ($menu_item['below'] as $key => $menu_item_below): ?>
                <li><a href="<?php print url($menu_item_below['link']['link_path']); ?>"><?php print $menu_item_below['link']['link_title']; ?></a></li>
              <?php endforeach ?>
              </ul>
            <?php endif ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>

  </div>
</div>

<!-- Main -->
<div id="main-wrapper">
  <div id="main" class="container">
    <?php print render($page['highlighted']); ?>
    <?php print $breadcrumb; ?>
    <a id="main-content"></a>
    <?php print $messages; ?>
    <?php print render($tabs); ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <div class="row">

      <!-- Content -->
      <div id="content" class="<?php print drupal_is_front_page() ? '12u' : '8u' ?>">
        <?php print render($page['content']); ?>
        <?php if ($view_to_render): ?>
          <?php print views_embed_view($view_to_render, 'block'); ?>
        <?php endif ?>
      </div>

      <!-- Sidebar -->
      <?php if (!drupal_is_front_page()): ?>
        <div id="sidebar" class="4u">

          <section class="sidebar-content desktop-only">
            <?php print views_embed_view('homepage_articles', 'sidebar_first'); ?>
          </section>

          <section class="sidebar-content">
            <h2 class="block__title block-title"><?php print $instagram_block['instagram_block_instagram_block']['#block']->title; ?></h2>
            <div class="view-content">
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
          </section>

          <section class="sidebar-content">
            <?php print render($search_block); ?>
          </section>

          <section class="sidebar-content">
            <?php print views_embed_view('brands', 'block'); ?>
          </section>

          <section class="sidebar-content">
            <?php print render($simplenews_block); ?>
          </section>

        </div>
      <?php endif ?>

    </div>
    <?php print $feed_icons; ?>
  </div>

</div>

<!-- Footer -->
<div id="footer-wrapper">
  <div id="footer" class="container">
    <section>
      <div class="row">
        <div class="8u">
          <div class="row">
            <!-- Nav -->
            <ul class="icons 4u desktop-only">
              <?php foreach ($main_menu as $key => $menu_item): ?>
                <li <?php print isset($menu_item['link']['options']['attributes']) ? drupal_attributes($menu_item['link']['options']['attributes']) : ''; ?>><a href="<?php print url($menu_item['link']['link_path']); ?>"><span><?php print $menu_item['link']['link_title']; ?></span></a></li>
              <?php endforeach; ?>
            </ul>
            <ul class="icons 4u desktop-only">
              <?php foreach ($award_categories as $key => $category): ?>
                <li class="icon <?php print $category->field_font_awsome_icon['und'][0]['safe_value']; ?>"><a href="<?php print url('taxonomy/term/' . $category->tid); ?>"><span><?php print $category->name; ?></span></a></li>
              <?php endforeach ?>
            </ul>
            <ul class="icons 4u social-menu">
              <li class="icon twitter fa-twitter"><a href="https://twitter.com/Iconic_Watches" target="_blank"><span><?php print t('Twitter'); ?></span></a></li>
              <li class="icon facebook fa-facebook"><a href="https://www.facebook.com/iconicwatchesblog" target="_blank"><span><?php print t('Facebook'); ?></span></a></li>
              <li class="icon pinterest fa-pinterest"><a href="http://www.pinterest.com/iconicwatches/" target="_blank"><span><?php print t('Pinterest'); ?></span></a></li>
              <li class="icon google-plus fa-google-plus"><a href="https://www.google.com/+Iconicwatchesblog" target="_blank"><span><?php print t('Google+'); ?></span></a></li>
              <li class="icon instagram fa-instagram"><a href="https://instagram.com/iconicwatches/" target="_blank"><span><?php print t('Instagram'); ?></span></a></li>
            </ul>
          </div>
        </div>
        <div class="4u desktop-only">
          <h4><?php print t('Useful links'); ?> :</h4>
          <ul>
            <li><a href="http://montresanciennes.fr/" target="_blank"><span>montreanciennes.fr</span></a></li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  <div id="copyright" class="container">
    <ul class="links">
      <li class="first">&copy; Iconic Watches. All rights reserved. 2014.</li>
      <li><?php print l(t('Legal notice'), 'node/23'); ?></li>
      <li>Website: <a href="http://www.pierre-bonnefoi.com">Pierre Bonnefoi</a></li>
    </ul>
  </div>
</div>

<?php print render($page['bottom']); ?>
