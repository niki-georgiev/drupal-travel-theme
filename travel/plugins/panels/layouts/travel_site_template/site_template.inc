<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Site Template'),
  'category' => t('Travel'),
  'icon' => 'site_template.png',
  'theme' => 'site_template',
  'admin theme' => 'site_template_admin',
  'admin css' => '../travel-panels-layouts-admin.css',
  'regions' => array(
  	'header' => t('Site Header'),
  	'msg' => t('System messages'),
    'content' => t('Content'),
    'footer' => t('Site Footer'),
  ),
);
