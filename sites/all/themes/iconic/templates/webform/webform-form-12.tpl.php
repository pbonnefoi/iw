<?php
/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 */
?>
<div class="row">
  <div class="6u">
    <?php print drupal_render($form['submitted']['first_name']); ?>
  </div>
  <div class="6u">
    <?php print drupal_render($form['submitted']['last_name']); ?>
  </div>
</div>
<div class="row">
  <div class="6u">
    <?php print drupal_render($form['submitted']['e_mail']); ?>
  </div>
  <div class="6u">
    <?php print drupal_render($form['submitted']['you_are']); ?>
  </div>
</div>
<?php print drupal_render($form['submitted']['message']); ?>

<p class="legend"><?php print '*' . t('Mandatory fields'); ?></p>

<?php print drupal_render($form['form_build_id']); ?>
<?php print drupal_render($form['form_token']); ?>
<?php print drupal_render($form['form_id']); ?>
<?php print drupal_render($form['actions']); ?>
