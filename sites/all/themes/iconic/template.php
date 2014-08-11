<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */

function iconic_preprocess_page(&$vars) {
  $vars['main_menu'] = menu_tree_all_data('main-menu');
}
