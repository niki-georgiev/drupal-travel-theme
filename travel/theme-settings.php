<?php

// Form settings
function travel_form_system_theme_settings_alter(&$form, $form_state) {
//IE specific settings.
  $form['options_settings']['travel_ie'] = array(
    '#type' => 'fieldset',
    '#title' => t('Old Internet Explorer Stylesheets'),
    '#attributes' => array('id' => 'travel-ie'),
  );
  $form['options_settings']['travel_ie']['travel_ie_enabled'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable Internet Explorer stylesheets in theme'),
    '#default_value' => theme_get_setting('travel_ie_enabled'),
    '#description' => t('If you check this box you can choose which IE stylesheets in theme get rendered on display.'),
  );
  $form['options_settings']['travel_ie']['travel_ie_enabled_css'] = array(
    '#type' => 'fieldset',
    '#title' => t('Check which IE versions you want to enable additional .css stylesheets for.'),
    '#states' => array(
      'visible' => array(
        ':input[name="travel_ie_enabled"]' => array('checked' => TRUE),
      ),
    ),
  );
  $form['options_settings']['travel_ie']['travel_ie_enabled_css']['travel_ie_enabled_versions'] = array(
    '#type' => 'checkboxes',
    '#options' => array(
      'ie8' => t('Internet Explorer 8'),
      'ie9' => t('Internet Explorer 9'),
      'ie10' => t('Internet Explorer 10'),
    ),
    '#default_value' => theme_get_setting('travel_ie_enabled_versions'),
  );
}
