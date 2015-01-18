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
        <?php if ($view_to_render): ?>
          <?php print views_embed_view($view_to_render, 'block'); ?>
        <?php endif ?>
      </div>

      <!-- Sidebar -->
      <div id="sidebar" class="4u">

        <section class="sidebar-content desktop-only">
          <?php print views_embed_view('homepage_articles', 'sidebar_first'); ?>
        </section>

        <section class="sidebar-content">
          <?php print render($search_block); ?>
        </section>

        <section class="ad">
          <p><?php print t('This space is available for a big ad.') . ' ' . l(t('Contact us'), url('node/12'), array('absolute' => TRUE)); ?></p>
        </section>

        <section class="sidebar-content">
          <?php print views_embed_view('brands', 'block'); ?>
        </section>

        <section class="sidebar-content">
          <?php print render($simplenews_block); ?>
        </section>

        <section class="sidebar-content desktop-only">
          <?php print views_embed_view('homepage_articles', 'sidebar_second'); ?>
        </section>

      </div>

    </div>
    <?php print $feed_icons; ?>
  </div>

</div>

<!-- Banner -->
<div id="banner-wrapper">
  <div class="inner">
    <section id="banner" class="container">
      <p><?php print t('This space is available for a big ad.') . ' ' . l(t('Contact us'), url('node/12'), array('absolute' => TRUE)); ?></p>
    </section>
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
            <ul class="icons 4u">
              <li class="icon twitter fa-twitter"><a href="https://twitter.com/Iconic_Watches" target="_blank"><span><?php print t('Twitter'); ?></span></a></li>
              <li class="icon facebook fa-facebook"><a href="https://www.facebook.com/iconicwatchesblog" target="_blank"><span><?php print t('Facebook'); ?></span></a></li>
              <li class="icon pinterest fa-pinterest"><a href="http://www.pinterest.com/iconicwatches/" target="_blank"><span><?php print t('Pinterest'); ?></span></a></li>
              <li class="icon google-plus fa-google-plus"><a href="" target="_blank"><span><?php print t('Google+'); ?></span></a></li>
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
      <li class="first">&copy; Iconic Watches. All rights reserved. 2014.</li>
      <li><?php print l(t('Legal notice'), 'node/23'); ?></li>
      <li>Website: <a href="http://www.pierre-bonnefoi.com">Pierre Bonnefoi</a></li>
    </ul>
  </div>
</div>

<?php print render($page['bottom']); ?>
