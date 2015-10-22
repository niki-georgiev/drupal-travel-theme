<?php
/**
* Implementation of hook_panels_styles().
*/
$plugin =  array(
  'materialize' => array(
    'title' => t('MaterializeCSS'),
    'description'   => t('MaterializeCSS panelels and region styles'),
    'render pane' => 'materialize_render_pane',
    'render region' => 'materialize_render_region',
    'pane settings form' => 'materialize_pane_settings_form',
    'settings form' => 'materialize_region_settings_form',
    'hook theme'    => array(
      'materialize_theme_pane' => array(
        'template' => 'materialize-pane',
         'path' => drupal_get_path('module', 'travel_panel_styles') .'/plugins/styles/materialize',
         'variables' => array(
           'content' => NULL,
           'settings' => NULL,
         ),
       ),
      'materialize_theme_region' => array(
        'template' => 'materialize-region',
         'path' => drupal_get_path('module', 'travel_panel_styles') .'/plugins/styles/materialize',
         'variables' => array(
           'content' => NULL,
           'settings' => NULL,
         ),
       ),
    ),
  ),
);
/*function theme_materialize_theme_pane ($variables) {

}*/
function theme_materialize_render_pane($vars) {
    $settings = $vars['settings'];
    $content = $vars['content'];
  return theme('materialize_theme_pane', array('content' => $content, 'settings' => $settings));
}
function theme_materialize_render_region($vars) {
    $content = '';

  foreach ($vars['panes'] as $pane_id => $pane_output) {

    $content .= $pane_output;
  }
  if (empty($content)) {
    return;
  }
  return theme('materialize_theme_region', array('content' => $content));
}

function materialize_pane_settings_form($style_settings) {
  $form['pane_color'] = array(
    '#type' => 'select',
    '#title' => t('Pane color'),
    '#options' => array(
      'blue' => t('Blue'),
      'green' => t('Green'),
    ),
    '#default_value' => (isset($style_settings['pane_color'])) ? $style_settings['pane_color'] : 'blue',
  );

  return $form;
}

function materialize_region_settings_form($style_settings){
 $form['region_color'] = array(
    '#type' => 'select',
    '#title' => t('Region color'),
    '#options' => array(
      'blue' => t('Red'),
      'green' => t('Blue'),
    ),
    '#default_value' => (isset($style_settings['region_color'])) ? $style_settings['region_color'] : 'pink',
  );

  return $form;
}