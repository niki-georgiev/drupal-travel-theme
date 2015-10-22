<?php

$plugin = array(
  'single' => TRUE,
  'title' => t('Contact Info Box'),
  'description' => t('Display Contact Information on small box'),
  'category' => t('Travel Panes'),
  'edit form' => 'travel_panel_panes_contact_box',
  'render callback' => 'travel_panel_panes_contact_box_render',
  'admin info' => 'travel_panel_panes_contact_box_info',
  'defaults' => array(),
  'all contexts' => TRUE,
);


/**
 * Edit form.
 */
function travel_panel_panes_contact_box($form, &$form_state) {
 $conf = $form_state['conf'];
/*
 $form['term'] = array(
   '#type' => 'textfield',
   '#title' => t('Term ID'),
   '#description' => t('The term, from which the root term will be displayed'),
   '#default_value' => $conf['term'],
 );

  $entity_info = entity_get_info('taxonomy_term');

  $options = array();
  if (!empty($entity_info['view modes'])) {
    foreach ($entity_info['view modes'] as $mode => $settings) {
      $options[$mode] = $settings['label'];
    }
  }

  $form['view_mode'] = array(
   '#type' => 'select',
   '#options' => $options,
   '#title' => t('View mode'),
   '#default_value' => $conf['view_mode'],
 );*/

  $form['string_data'] = array(
    '#title' => t('String Settings'),
    '#type' => 'textarea',
    '#description' => t('The comment will be unpublished if it contains any of the phrases above."'),
    '#default_value' => isset($conf['string_data']) ? $conf['string_data'] : '',
);

 return $form;
}

/**
 * Edit form submit function.
 */
function travel_panel_panes_contact_box_submit($form, &$form_state) {
/*  $form_state['conf']['term'] = $form_state['values']['term'];
  $form_state['conf']['view_mode'] = $form_state['values']['view_mode'];*/
  $form_state['conf']['string_data'] = $form_state['values']['string_data'];
}

/**
 * Render the panel.
 */
function travel_panel_panes_contact_box_render($subtype, $conf, $args, $contexts) {

  // Update the strings to allow contexts.
  if (!empty($contexts)) {
    $str = ctools_context_keyword_substitute($conf['string_data'], array(), $contexts);
  }
    //$arr = explode("\n", $str);

  // Render as a block.
  $block = new stdClass();
  $block->module = 'travel_panel_panes';
  $block->delta = $subtype;
  if ( $conf['override_title'] == TRUE ) {
      $block->title = $conf['override_title_text'];
    }
    else {
      $block->title = NULL;
    }

    $output = '';
    $output .= "Change This";
    $output .= "Change That";

    $block->content = $output;

  return $block;

}


/**
 * Admin info.
 */
function travel_panel_panes_contact_box_info($subtype, $conf, $contexts) {
  if (!empty($conf)) {
/*    $content = '<p><b>Term ID:</b> ' . $conf['term'] . '</p>';
    $content = '<p><b>View mode:</b> ' . $conf['view_mode'] . '</p>';*/
    $content = '<p><b>String data:</b> ' . $conf['string_data'] . '</p>';

    $block = new stdClass;
    $block->title = $conf['override_title'] ? $conf['override_title_text'] : '';
    $block->content = $content;
    return $block;
  }
}

function travel_panel_panes_contact_box_title($subtype, $conf, $contexts) {
  $output = t('Panel Panes Box');
  if ($conf['string_data']) {
    $output = filter_xss_admin($conf['string_data']);
  }
  return $output;
}
