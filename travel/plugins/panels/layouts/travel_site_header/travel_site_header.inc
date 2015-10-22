<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Site Header'),
  'category' => t('Travel'),
  'icon' => 'travel_site_header.png',
  'theme' => 'travel_site_header',
  'admin theme' => 'travel_site_header_admin',
  'admin css' => '../travel-panels-layouts-admin.css',
  'regions' => array(
    'header_logo' => t('Header Logo'),
    'header_menu' => t('Header Menu'),
  ),
);
