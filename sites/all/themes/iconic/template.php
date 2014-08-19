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

function iconic_preprocess_node(&$vars) {
  $node = &$vars['node'];
  // Add theme suggestion regarding the selected view display mode
  $vars['theme_hook_suggestions'][] = 'node__' . $node->type . '__' . $vars['view_mode'];
  // Optionally, run node-type-specific preprocess functions, like
  // avene_v4_preprocess_node_page() or avene_v4_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $node->type;
  if (function_exists($function)) {
    $function($vars, $hook);
  }
}

function iconic_preprocess_taxonomy_term(&$vars) {
}
