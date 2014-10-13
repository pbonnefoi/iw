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
    <li class="image logo">
      <?php print render($content['field_logo']); ?>
    </li>
  </div>

</div>
