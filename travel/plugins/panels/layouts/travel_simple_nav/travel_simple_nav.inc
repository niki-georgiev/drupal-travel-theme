<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Single Page Nav'),
  'category' => t('Travel'),
  'icon' => 'travel_simple_nav.png',
  'theme' => 'travel_simple_nav',
  'admin theme' => 'travel_simple_nav_admin',
  'admin css' => '../travel-panels-layouts-admin.css',
  'regions' => array(
    'nav' => t('Main'),
  ),
);
