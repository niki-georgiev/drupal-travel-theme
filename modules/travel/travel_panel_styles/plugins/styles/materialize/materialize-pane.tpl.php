<?php
drupal_add_css(drupal_get_path('module','travel_panel_styles') .'/plugins/styles/materialize/materialize.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE)); ?>
<div class="materialize-pane">
<?php if (isset($content->title)): ?>
<h2 class="pane-title <?php print (isset($settings['pane_color'])) ? $settings['pane_color'] : 'blue'; ?>"><?php print $content->title; ?></h2>
<?php endif ?>
<div class="pane-content">
<?php print render($content->content); ?>
</div>
</div>