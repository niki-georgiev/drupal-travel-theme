<div class="panel-display panel-1col clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel panel-col">
    <div class="inside"><?php print $content['header']; ?></div>
  </div>
  <div class="panel-panel panel-col">
    <div class="inside"><?php print $content['msg']; ?></div>
  </div>
  <div class="panel-panel panel-col">
    <div class="inside"><?php print $content['content']; ?></div>
  </div>
  <div class="panel-panel panel-col">
    <div class="inside"><?php print $content['footer']; ?></div>
  </div>
</div>
