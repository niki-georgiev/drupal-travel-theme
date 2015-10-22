
<?php
drupal_add_css(drupal_get_path('module','travel_panel_styles') .'/plugins/styles/example/example.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE)); ?>
<div class="example-region">
<?php print render($content->content); ?>
</div>