<?php
/**
 * @file
 * template.php
 */

/**
 * Preprocess function for page.tpl.php
 */



function travel_preprocess_page(&$vars) {
  if (!empty($vars['panels_everywhere_site_template'])) {

  }
}


/**
 * Implements HOOK_theme().
 */
function travel_theme(){
  return array(
    'nomarkup' => array (
      'render element' => 'element',
     ),
  );
}


/**
 * Cleans all markup of a field.
 */
function theme_nomarkup($vars) {
  $output = '';
  foreach ($vars['items'] as $delta => $item) {
    $output .=  drupal_render($item);
  }
  return $output;
}

/**
 * Remove panel separator
 */
function travel_panels_default_style_render_region($vars) {
  $output = '';
  $output .= implode('', $vars['panes']);
  return $output;
}


/**
 * Preprocess function forsite template //don't work
 */
function travel_preprocess_travel_site_template(&$vars) {

}
/**
 * Implements preprocess_panels_pane().
 */
function travel_preprocess_panels_pane(&$vars) {

   //kpr($vars['pane']->type);

  if($vars['pane']->type == 'fieldable_panels_pane' && $vars['content']['#bundle'] == 'slider_slide') {
    $vars['theme_hook_suggestions'][] = 'panels_pane__big_slide';
  }

   if($vars['pane']->type == 'panels_mini' && $vars['pane']->subtype == 'big_slide') {
     $vars['theme_hook_suggestions'][] = 'panels_pane__big_slider';
  }

  if($vars['pane']->type == 'panels_mini' && $vars['pane']->subtype == 'simple_nav') {
     $vars['theme_hook_suggestions'][] = 'panels_pane__simple_nav';
  }
  if($vars['pane']->type == 'panels_mini' && $vars['pane']->subtype == 'testimonials_list') {
     $vars['theme_hook_suggestions'][] = 'panels_pane__testimonials_list';
  }

    if($vars['pane']->type == 'block' && $vars['pane']->subtype == 'system-main-menu') {
      $vars['theme_hook_suggestions'][] = 'panels_pane__main_menu';
  }
  if($vars['pane']->type == 'block' && $vars['pane']->subtype == 'menu-menu-mobile-menu') {
      $vars['theme_hook_suggestions'][] = 'panels_pane__mobile_menu';
  }
  if($vars['pane']->type == 'views_panes'&& $vars['pane']->subtype == 'trips_categories-panel_pane_category_trips_list') {
       $vars['theme_hook_suggestions'][] = 'panels_pane__views_panes__trips_categories_lists';
  }
  if($vars['pane']->type == 'fieldable_panels_pane' && $vars['content']['#bundle'] == 'parallax_widget') {
      $vars['theme_hook_suggestions'][] = 'panels_pane__parallax_widget';
  }
  if($vars['pane']->type == 'fieldable_panels_pane' && $vars['content']['#bundle'] == 'testimonials') {
      $vars['theme_hook_suggestions'][] = 'panels_pane__testimonials';
  }
}
/**
 * Implements preprocess_html().
 */
function travel_preprocess_html(&$vars) {
  global $language;

  // HTML Attributes
  // Use a proper attributes array for the html attributes.
  $vars['html_attributes'] = array();
  $vars['html_attributes']['lang'][] = $language->language;
  $vars['html_attributes']['dir'][] = $language->dir;

  // Convert RDF Namespaces into structured data using drupal_attributes.
  $vars['rdf_namespaces'] = array();
  if (function_exists('rdf_get_namespaces')) {
    foreach (rdf_get_namespaces() as $prefix => $uri) {
      $prefixes[] = $prefix . ': ' . $uri;
    }
    $vars['rdf_namespaces']['prefix'] = implode(' ', $prefixes);
  }

  // Flatten the HTML attributes and RDF namespaces arrays.
  $vars['html_attributes'] = drupal_attributes($vars['html_attributes']);
  $vars['rdf_namespaces'] = drupal_attributes($vars['rdf_namespaces']);


	  // Add IE classes.
  if (theme_get_setting('basic_ie_enabled')) {
    $travel_ie_enabled_versions = theme_get_setting('travel_ie_enabled_versions');
    if (in_array('ie8', $travel_ie_enabled_versions, TRUE)) {
      drupal_add_css(path_to_theme() . '/css/ie8.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 8', '!IE' => FALSE), 'preprocess' => FALSE));
      drupal_add_js(path_to_theme() . '/js/vendor/selectivizr-min.js');
    }
    if (in_array('ie9', $travel_ie_enabled_versions, TRUE)) {
      drupal_add_css(path_to_theme() . '/css/ie9.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 9', '!IE' => FALSE), 'preprocess' => FALSE));
    }
    if (in_array('ie10', $travel_ie_enabled_versions, TRUE)) {
      drupal_add_css(path_to_theme() . '/css/ie10.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 10', '!IE' => FALSE), 'preprocess' => FALSE));
    }
  }
}


/**
 * Preprocess function template_preprocess_menu_tree()
 */
function travel_menu_tree__main_menu(&$vars) {
   return '<ul class="right hide-on-med-and-down">' . $vars['tree'] . '</ul>';
}

/**
 * Preprocess function template_preprocess_menu_tree()
 */
function travel_menu_tree__menu_mobile_menu(&$vars) {
   return '<ul id="nav-mobile" class="side-nav">' . $vars['tree'] . '</ul>';
}


/**
 * Implements hook_form_alter().
 */
function travel_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'contact_us_entityform_edit_form') {
    //$form['#submit'][] = 'my_custom_submit_handler';

  }
}


/**
 * Preprocess function for fieldable-panels-pane.tpl.php
 */
function travel_preprocess_fieldable_panels_pane(&$vars) {
    $elements = $vars['elements'];
  // If current pane is fieldable and has type 'slider_slide'.
  if ($elements['#entity_type'] == 'fieldable_panels_pane' && $elements['#bundle'] == 'slider_slide') {

    if(isset($vars['content']['field_slide_background_image'][0])){
      $vars['image'] = render($vars['content']['field_slide_background_image'][0]);
    }

    if(isset($vars['content']['field_slide_big_tagline'][0])){
      $vars['big_tagline'] = render($vars['content']['field_slide_big_tagline'][0]);
    }

    if(isset($vars['content']['field_slide_small_slogan'][0])){
      $vars['small_slogan'] = render($vars['content']['field_slide_small_slogan'][0]);
    }
  }
  if ($elements['#entity_type'] == 'fieldable_panels_pane' && $elements['#bundle'] == 'parallax_widget') {
      if(isset($vars['content']['field_paralax_image'])){
        $vars['content']['field_paralax_image']['#theme'] = "nomarkup";
        $vars['parallax_image'] = render($vars['content']['field_paralax_image']);
    }
  }
  if ($elements['#entity_type'] == 'fieldable_panels_pane' && $elements['#bundle'] == 'testimonials') {
      if(isset($vars['content']['field_person_image'])){
        $vars['content']['field_person_image']['#theme'] = "nomarkup";
        $vars['person_image'] = render($vars['content']['field_person_image']);
      }
      if(isset($vars['content']['field_testimonials_text'])){
        $vars['content']['field_testimonials_text']['#theme'] = "nomarkup";
        $vars['testimonials_text'] = render($vars['content']['field_testimonials_text']);
      }
      if(isset($vars['content']['title_field'])){
        $vars['content']['title_field']['#theme'] = "nomarkup";
        $vars['title_field'] = render($vars['content']['title_field']);
      }
  }
}



