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
            <li><a <?php print isset($menu_item['options']['attributes']) ? drupal_attributes($menu_item['options']['attributes']) : ''; ?> href="<?php print url($menu_item['link']['link_path']); ?>"><span><?php print url($menu_item['link']['link_title']); ?></span></a></li>
          <?php endforeach ?>
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
    <?php print render($page['content']); ?>
    <?php print $feed_icons; ?>
  </div>

  <?php
    // Render the sidebars to see if there's anything in them.
    $sidebar_second = render($page['sidebar_second']);
  ?>

  <?php if ($sidebar_second): ?>
    <aside class="sidebars">
      <?php print $sidebar_second; ?>
    </aside>
  <?php endif; ?>

</div>

<!-- Footer -->
<div id="footer-wrapper">
  <div id="copyright" class="container">
    <ul class="links">
      <li>&copy; Iconic Watches. All rights reserved. 2014.</li>
      <li>Website: <a href="http://www.pierre-bonnefoi.com">Pierre Bonnefoi</a></li>
    </ul>
  </div>
</div>

<?php print render($page['bottom']); ?>
