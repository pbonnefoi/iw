<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<div class="row">

  <!-- Content -->
  <div id="content" class="8u">
    <?php print render($content['field_articles_full']); ?>
  </div>

  <!-- Sidebar -->
  <div id="sidebar" class="4u">
    <?php print render($content['field_articles_sidebar']); ?>
    <section class="ad">
      <a href=""><img src="images/ad.jpg" width="355" height="355" alt="" /></a>
    </section>
  </div>

</div>
