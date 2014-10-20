<?php

/**
 * @file
 * Default theme implementation to display a term.
 *
 * @see template_preprocess()
 * @see template_preprocess_taxonomy_term()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<div id="taxonomy-term-<?php print $term->tid; ?>" class="<?php print $classes; ?>">

  <?php if (!$page): ?>
    <h2><a href="<?php print $term_url; ?>"><?php print $term_name; ?></a></h2>
  <?php endif; ?>

  <div class="content">
    <div class="watch-attributes-wrapper row">
      <div class="7u">
        <span class="image featured logo"><?php print render($content['field_logo']); ?></span>
      </div>
      <div class="5u">
        <div>
          <?php if (isset($content['field_watch_description']) && $content['field_watch_description']): ?>
            <?php print render($content['field_watch_description']); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>


</div>
