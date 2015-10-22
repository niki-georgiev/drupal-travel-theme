<?php

$handler = new stdClass();
$handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
$handler->api_version = 1;
$handler->name = 'site_template__panel_context_d880232a-7d2e-4557-bb03-1cb2f0b2f8ea';
$handler->task = 'site_template';
$handler->subtask = '';
$handler->handler = 'panel_context';
$handler->weight = 0;
$handler->conf = array(
  'title' => 'Travel Site Template',
  'no_blocks' => 1,
  'pipeline' => 'standard',
  'body_classes_to_remove' => '',
  'body_classes_to_add' => '',
  'css_id' => '',
  'css' => '',
  'contexts' => array(),
  'relationships' => array(),
  'name' => '',
);
$display = new panels_display();
$display->layout = 'site_template';
$display->layout_settings = array();
$display->panel_settings = array(
  'style_settings' => array(
    'default' => NULL,
    'content' => NULL,
  ),
);
$display->cache = array();
$display->title = '';
$display->uuid = '27f440c4-282f-4894-9960-d7e606e482dd';
$display->content = array();
$display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-4cb8269f-1ed7-4067-b49b-896714f6ed95';
  $pane->panel = 'content';
  $pane->type = 'page_content';
  $pane->subtype = 'page_content';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'context' => 'argument_page_content_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '4cb8269f-1ed7-4067-b49b-896714f6ed95';
  $display->content['new-4cb8269f-1ed7-4067-b49b-896714f6ed95'] = $pane;
  $display->panels['content'][0] = 'new-4cb8269f-1ed7-4067-b49b-896714f6ed95';
$display->hide_title = PANELS_TITLE_NONE;
$display->title_pane = '0';
$handler->conf['display'] = $display;
