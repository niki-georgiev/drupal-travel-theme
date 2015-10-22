<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Travel Frontpage'),
  'category' => t('Travel'),
  'icon' => 'travel_frontpage.png',
  'theme' => 'travel_frontpage',
  'admin css' => '../panels-travel-layouts-admin.css',
  'regions' => array(
    'content' => t('Content'),
  ),
);
