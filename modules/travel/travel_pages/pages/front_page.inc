<?php

$page = new stdClass();
$page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
$page->api_version = 1;
$page->name = 'front_page';
$page->task = 'page';
$page->admin_title = 'Front Page';
$page->admin_description = 'This is site front page';
$page->path = 'home';
$page->access = array();
$page->menu = array();
$page->arguments = array();
$page->conf = array(
  'admin_paths' => FALSE,
);
$page->default_handlers = array();
$handler = new stdClass();
$handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
$handler->api_version = 1;
$handler->name = 'page_front_page__panel_d880232a-7d2e-4557-bb03-1cb2f0bsynkt';
$handler->task = 'page';
$handler->subtask = 'front_page';
$handler->handler = 'panel_context';
$handler->weight = 0;
$handler->conf = array(
  'title' => 'Front Page',
  'no_blocks' => 1,
  'pipeline' => 'standard',
  'body_classes_to_remove' => '',
  'body_classes_to_add' => '',
  'css_id' => '',
  'css' => '',
  'contexts' => array(),
  'relationships' => array(),
  'name' => 'panel',
);
$display = new panels_display();
$display->layout = 'travel_frontpage';
$display->layout_settings = array();
$display->panel_settings = array(
  'style_settings' => array(
    'default' => NULL,
    'header' => NULL,
    'nav' => NULL,
    'content' => NULL,
    'footer' => NULL,
    'newsletter' => NULL,
  ),
);
$display->cache = array();
$display->title = '';
$display->uuid = 'ef8ae369-90d8-4b0d-849f-fed875cae65c';
$display->content = array();
$display->panels = array();
$display->hide_title = PANELS_TITLE_NONE;
$display->title_pane = '0';
$handler->conf['display'] = $display;
$page->default_handlers[$handler->name] = $handler;

