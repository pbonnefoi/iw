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
<div class="image <?php print $classes; ?>">
  <a href="<?php print url('taxonomy/term' . $term->tid); ?>">
    <?php print render($content['field_logo']); ?>
  </a>
</div>
