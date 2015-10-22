<?php

/**
 * @file
 * Page manager default pages directory.
 */



/**
 * Implementation of hook_default_page_manager_pages().
 */
function travel_pages_default_page_manager_pages() {
  $pages = array();
  $files = _get_default_page_manager_files('pages');
  foreach ($files as $absolute => $file) {
    require $absolute;
    if (isset($page)) {
      $pages[$file->name] = $page;
    }
  }
  return $pages;
}

/**
 * Implementation of hook_default_page_manager_handlers().
 */
function travel_pages_default_page_manager_handlers() {
  $handlers = array();
  $files = _get_default_page_manager_files('handlers');
  foreach ($files as $absolute => $file) {
    require $absolute;
    if (isset($handler)) {
      $handlers[$file->name] = $handler;
    }
  }
  return $handlers;
}

/**
 * helper function to get  files in directory
 * @param  $string $dirname
 * @return array
 */
function _get_default_page_manager_files($dirname){
  $files = file_scan_directory(drupal_get_path('module', 'travel_pages'). '/'.$dirname, '/\.inc/');
  return $files;
}



