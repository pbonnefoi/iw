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
  $simplenews_block_info = block_load('simplenews', '22');
  // We get the menu block based on the submenu of joaillerie
  $vars['simplenews_block'] = _block_get_renderable_array(_block_render_blocks(array($simplenews_block_info)));
  $award_categories_vocab = taxonomy_vocabulary_machine_name_load('award_category');
  $award_categories = taxonomy_get_tree($award_categories_vocab->vid);
  $vars['award_categories'] = array();
  foreach ($award_categories as $key => $category) {
    $term = taxonomy_term_load($category->tid);
    $vars['award_categories'][] = taxonomy_term_load($category->tid);
  }
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

function iconic_preprocess_node_article(&$vars) {
  $node = &$vars['node'];
  // Add theme suggestion regarding the selected view display mode
  $more_images = field_get_items('node', $node, 'field_more_images');
  $vars['more_images'] = array();
  if ($more_images) {
    foreach ($more_images as $key => $image) {
      $vars['more_images'][] = field_view_value('node', $node, 'field_more_images', $image);
    }
  }
}

function iconic_preprocess_node_watch(&$vars) {
  $node = &$vars['node'];
  // Add theme suggestion regarding the selected view display mode
  $more_images = field_get_items('node', $node, 'field_more_images');
  $vars['more_images'] = array();
  if ($more_images) {
    foreach ($more_images as $key => $image) {
      $vars['more_images'][] = field_view_value('node', $node, 'field_more_images', $image);
    }
  }
  $brand = field_get_items('node', $node, 'field_brand');
  if ($brand) {
    $term = taxonomy_term_load($brand[0]['tid']);
    $vars['brand_tid'] = $term->tid;
    $logo = field_get_items('taxonomy_term', $term, 'field_logo');
    if ($logo) {
      $vars['brand_logo'] = field_view_value('taxonomy_term', $term, 'field_logo', $logo[0], array(
        'type' => 'image',
        'settings' => array(
          'image_style' => '120x120',
        ),
      ));
    }
  }
  $award_category = field_get_items('node', $node, 'field_award_category');
  if ($award_category) {
    $term = taxonomy_term_load($award_category[0]['tid']);
    $vars['award_category_tid'] = $term->tid;
    $font_awsome_icon = field_get_items('taxonomy_term', $term, 'field_font_awsome_icon');
    if ($logo) {
      $vars['font_awsome_icon'] = field_view_value('taxonomy_term', $term, 'field_font_awsome_icon', $font_awsome_icon[0]);
    }
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

function iconic_radios($vars) {
  $element = $vars['element'];
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

function iconic_links__node($vars) {
  $links = $vars['links'];
  $attributes = $vars['attributes'];
  $heading = $vars['heading'];
  global $language_url;
  $output = '';

  if (count($links) > 0) {
    $output = '';

    // Treat the heading first if it is present to prepend it to the
    // list of links.
    if (!empty($heading)) {
      if (is_string($heading)) {
        // Prepare the array that will be used when the passed heading
        // is a string.
        $heading = array(
          'text' => $heading,

          // Set the default level of the heading.
          'level' => 'h2',
        );
      }
      $output .= '<' . $heading['level'];
      if (!empty($heading['class'])) {
        $output .= drupal_attributes(array('class' => $heading['class']));
      }
      $output .= '>' . check_plain($heading['text']) . '</' . $heading['level'] . '>';
    }

    $num_links = count($links);
    $i = 1;

    foreach ($links as $key => $link) {
      $class = array($key);

      // Add first, last and active classes to the list of links to help out themers.
      if ($i == 1) {
        $class[] = 'first';
      }
      if ($i == $num_links) {
        $class[] = 'last';
      }
      if (isset($link['href']) && ($link['href'] == $_GET['q'] || ($link['href'] == '<front>' && drupal_is_front_page())) && (empty($link['language']) || $link['language']->language == $language_url->language)) {
        $class[] = 'active';
      }

      if (isset($link['href'])) {
        $link['attributes']['target'] = '_blank';
        // Pass in $link as $options, they share the same keys.
        $output .= l($link['title'], $link['href'], $link);
      }
      elseif (!empty($link['title'])) {
        // Some links are actually not links, but we wrap these in <span> for adding title and class attributes.
        if (empty($link['html'])) {
          $link['title'] = check_plain($link['title']);
        }
        $span_attributes = '';
        if (isset($link['attributes'])) {
          $span_attributes = drupal_attributes($link['attributes']);
        }
        $output .= '<span' . $span_attributes . '>' . $link['title'] . '</span>';
      }

      $i++;
    }

  }

  return $output;
}
