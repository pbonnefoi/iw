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
    $function($vars);
  }
}

function iconic_preprocess_node_versus(&$vars) {
  $node = &$vars['node'];
  $pros_left = field_get_items('node', $node, 'field_pros_left');
  $vars['pros_left'] = array();
  if ($pros_left) {
    foreach ($pros_left as $key => $pl) {
      $vars['pros_left'][] = field_view_value('node', $node, 'field_pros_left', $pl);
    }
  }
  $pros_right = field_get_items('node', $node, 'field_pros_right');
  $vars['pros_right'] = array();
  if ($pros_right) {
    foreach ($pros_right as $key => $pr) {
      $vars['pros_right'][] = field_view_value('node', $node, 'field_pros_left', $pr);
    }
  }
  $cons_left = field_get_items('node', $node, 'field_cons_left');
  $vars['cons_left'] = array();
  if ($cons_left) {
    foreach ($cons_left as $key => $cl) {
      $vars['cons_left'][] = field_view_value('node', $node, 'field_pros_left', $cl);
    }
  }
  $cons_right = field_get_items('node', $node, 'field_cons_right');
  $vars['cons_right'] = array();
  if ($cons_right) {
    foreach ($cons_right as $key => $cr) {
      $vars['cons_right'][] = field_view_value('node', $node, 'field_pros_left', $cr);
    }
  }
}

function iconic_preprocess_taxonomy_term(&$vars) {
}

function iconic_form_element($vars) {
  $element = &$vars['element'];

  // This function is invoked as theme wrapper, but the rendered form element
  // may not necessarily have been processed by form_builder().
  $element += array(
    '#title_display' => 'before',
  );

  // Add element #id for #type 'item'.
  if (isset($element['#markup']) && !empty($element['#id'])) {
    $attributes['id'] = $element['#id'];
  }
  // Add element's #type and #name as class to aid with JS/CSS selectors.
  $attributes['class'] = array('form-item');
  if (!empty($element['#type'])) {
    $attributes['class'][] = 'form-type-' . strtr($element['#type'], '_', '-');
  }
  if (!empty($element['#name'])) {
    $attributes['class'][] = 'form-item-' . strtr($element['#name'], array(' ' => '-', '_' => '-', '[' => '-', ']' => ''));
  }
  // Add a class for disabled elements to facilitate cross-browser styling.
  if (!empty($element['#attributes']['disabled'])) {
    $attributes['class'][] = 'form-disabled';
  }
  // CUSTOM CODE
  if ($element['#type'] == 'radio' && $element['#parents'][0] == 'choice') {
    $attributes['class'][] = '6u';
  }
  $output = '<div' . drupal_attributes($attributes) . '>' . "\n";


  // If #title is not set, we don't display any label or required marker.
  if (!isset($element['#title'])) {
    $element['#title_display'] = 'none';
  }
  $prefix = isset($element['#field_prefix']) ? '<span class="field-prefix">' . $element['#field_prefix'] . '</span> ' : '';
  $suffix = isset($element['#field_suffix']) ? ' <span class="field-suffix">' . $element['#field_suffix'] . '</span>' : '';

  switch ($element['#title_display']) {
    case 'before':
    case 'invisible':
      $output .= ' ' . theme('form_element_label', $vars);
      $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
      break;

    case 'after':
      $output .= ' ' . $prefix . $element['#children'] . $suffix;
      $output .= ' ' . theme('form_element_label', $vars) . "\n";
      break;

    case 'none':
    case 'attribute':
      // Output no label and no required marker, only the children.
      $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
      break;
  }

  if (!empty($element['#description'])) {
    $output .= '<div class="description">' . $element['#description'] . "</div>\n";
  }

  $output .= "</div>\n";

  return $output;
}

function iconic_radios($variables) {
  $element = $variables['element'];
  $attributes = array();
  if (isset($element['#id'])) {
    $attributes['id'] = $element['#id'];
  }
  $attributes['class'] = 'form-radios';
  if (!empty($element['#attributes']['class'])) {
    $attributes['class'] .= ' ' . implode(' ', $element['#attributes']['class']);
  }
  if ($element['#parents'][0] == 'choice') {
    $attributes['class'] .= ' row';
  }
  if (isset($element['#attributes']['title'])) {
    $attributes['title'] = $element['#attributes']['title'];
  }
  return '<div' . drupal_attributes($attributes) . '>' . (!empty($element['#children']) ? $element['#children'] : '') . '</div>';
}
