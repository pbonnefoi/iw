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
        <ul class="attributes icons">
          <?php if ($content['field_creation_date']): ?>
            <li class="icon fa-history"><span><?php print t('Founded'); ?> : </span><?php print render($content['field_creation_date']); ?></li>
          <?php endif ?>
          <?php if ($content['field_founder']): ?>
            <li class="icon fa-pencil"><span><?php print t('Founder'); ?> : </span><?php print render($content['field_founder']); ?></li>
          <?php endif ?>
          <?php if ($city && $country): ?>
            <li class="icon fa-map-marker"><span><?php print t('Place'); ?> : </span><?php print $city . ', ' . $country; ?></li>
          <?php endif ?>
          <?php if ($content['field_company_entity']): ?>
            <li class="icon fa-institution"><span><?php print t('Entity'); ?> : </span><?php print render($content['field_company_entity']); ?></li>
          <?php endif ?>
        </ul>
      </div>
      <div>
        <?php if (isset($content['description']) && $content['description']): ?>
          <?php print render($content['description']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>


</div>
