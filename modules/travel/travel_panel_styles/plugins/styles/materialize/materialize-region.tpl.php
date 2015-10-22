
<?php
drupal_add_css(drupal_get_path('module','travel_panel_styles') .'/plugins/styles/materialize/materialize.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE)); ?>
<div class="materialize-region">
<?php print render($content); ?>
</div>