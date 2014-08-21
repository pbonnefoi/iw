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
    <p><?php print variable_get('site_slogan'); ?></p>

    <!-- Nav -->
    <nav id="nav">
      <ul>
        <?php foreach ($main_menu as $key => $menu_item): ?>
          <li><a <?php print isset($menu_item['link']['options']['attributes']) ? drupal_attributes($menu_item['link']['options']['attributes']) : ''; ?> href="<?php print url($menu_item['link']['link_path']); ?>"><span><?php print $menu_item['link']['link_title']; ?></span></a></li>
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
      <div id="content" class="8u">
        <?php print render($page['content']); ?>
      </div>

      <!-- Sidebar -->
      <div id="sidebar" class="4u">

        <section class="sidebar-content">
          <?php print views_embed_view('homepage_articles', 'sidebar_first'); ?>
        </section>

        <section class="sidebar-content">
          <?php print views_embed_view('brands', 'block'); ?>
        </section>

        <section class="sidebar-content">
          <?php print render($simplenews_block); ?>
        </section>

        <section class="ad">
          <a href="" class="image"><img src="/sites/all/themes/iconic/images/small_ad.png" width="355" height="355" alt="" /></a>
        </section>

        <section class="sidebar-content">
          <?php print views_embed_view('homepage_articles', 'sidebar_second'); ?>
        </section>

      </div>

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
            <ul class="icons 4u">
              <?php foreach ($main_menu as $key => $menu_item): ?>
                <li <?php print isset($menu_item['link']['options']['attributes']) ? drupal_attributes($menu_item['link']['options']['attributes']) : ''; ?>><a href="<?php print url($menu_item['link']['link_path']); ?>"><span><?php print $menu_item['link']['link_title']; ?></span></a></li>
              <?php endforeach; ?>
            </ul>
            <ul class="icons 4u">
              <li class="icon fa-clock-o"><a href=""><span><?php print t('3 Hands'); ?></span></a></li>
              <li class="icon fa-anchor"><a href=""><span><?php print t('Divers'); ?></span></a></li>
              <li class="icon fa-paper-plane"><a href=""><span><?php print t('Chronographs'); ?></span></a></li>
            </ul>
            <ul class="icons 4u">
              <li class="icon twitter fa-twitter"><a href="https://twitter.com/Iconic_Watches"><span><?php print t('Twitter'); ?></span></a></li>
              <li class="icon facebook fa-facebook"><a href=""><span><?php print t('Facebook'); ?></span></a></li>
              <li class="icon pinterest fa-pinterest"><a href="http://www.pinterest.com/iconicwatches/"><span><?php print t('Pinterest'); ?></span></a></li>
              <li class="icon google-plus fa-google-plus"><a href=""><span><?php print t('Google+'); ?></span></a></li>
            </ul>
          </div>
        </div>
        <div class="4u">
        </div>
      </div>
    </section>
  </div>
  <div id="copyright" class="container">
    <ul class="links">
      <li>&copy; Iconic Watches. All rights reserved. 2014.</li>
      <li>Website: <a href="http://www.pierre-bonnefoi.com">Pierre Bonnefoi</a></li>
    </ul>
  </div>
</div>

<?php print render($page['bottom']); ?>
