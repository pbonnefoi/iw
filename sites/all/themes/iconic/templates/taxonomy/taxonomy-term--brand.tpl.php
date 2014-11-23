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
$arg = arg();
?>
<div id="taxonomy-term-<?php print $term->tid; ?>" class="<?php print $classes; ?>">

  <?php if (!$page || count($arg) != 3 || (count($arg) == 3 && $arg[0] != 'taxonomy' && $arg[1] != 'term' && !is_numeric($arg[2]))): ?>
    <h2><a href="<?php print $term_url; ?>"><?php print $term_name; ?></a></h2>
  <?php endif; ?>

  <div class="content">
    <div class="watch-attributes-wrapper row">
      <div class="4u">
        <span class="image featured logo"><?php print render($content['field_logo']); ?></span>
      </div>
      <div class="8u">
        <div>
          <?php if (isset($content['description']) && $content['description']): ?>
            <?php print render($content['description']); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>


</div>
