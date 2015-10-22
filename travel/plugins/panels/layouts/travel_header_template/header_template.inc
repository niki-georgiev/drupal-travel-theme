<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Header Template'),
  'category' => t('Travel'),
  'icon' => 'header_template.png',
  'theme' => 'header_template',
  'admin theme' => 'header_template_admin',
  'admin css' => '../travel-panels-layouts-admin.css',
  'regions' => array(
    'header_top' => t('Header Top'),
    'header_left' => t('Header Left'),
    'header_center' => t('Header Center'),
    'header_right' => t('Header Right'),
    'header_bottom' => t('Header Bottom'),
  ),
);
