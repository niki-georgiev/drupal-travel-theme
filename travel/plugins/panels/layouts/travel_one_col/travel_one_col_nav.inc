<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Simple One Col'),
  'category' => t('Travel'),
  'icon' => 'travel_one_col.png',
  'theme' => 'travel_one_col',
  'admin theme' => 'travel_one_col_admin',
  'admin css' => '../travel-panels-layouts-admin.css',
  'regions' => array(
    'main' => t('Main'),
  ),
);
