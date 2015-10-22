<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Footer Template'),
  'category' => t('Travel'),
  'icon' => 'footer_template.png',
  'theme' => 'footer_template',
  'admin css' => '../panels-footer-layouts-admin.css',
  'regions' => array(
    'footer_first' => t('First Footer Box'),
    'footer_second' => t('Second Footer Box'),
    'footer_third' => t('Third Footer Box'),
    'footer_fourth' => t('Fourth Footer Box'),
  ),
);
