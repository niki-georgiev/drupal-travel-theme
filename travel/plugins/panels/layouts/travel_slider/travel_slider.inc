<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Travel Big Slider'),
  'category' => t('Travel'),
  'icon' => 'travel_slider.png',
  'theme' => 'travel_slider',
  'admin theme' => 'travel_slider_admin',
  'admin css' => '../travel-panels-layouts-admin.css',
  'regions' => array(
  	'slide' => t('Slider Slide'),
  ),
);
