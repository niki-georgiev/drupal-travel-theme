<div class="panel-display <?php print $classes ?>  clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['header_top']): ?>
    <div class="panel-panel panel-col-top">
      <div class="inside"><?php print $content['header_top']; ?></div>
    </div>
  <?php endif ?>

  <div class="center-wrapper clearfix">
    <div class="panel-panel panel-col-first">
      <div class="inside"><?php print $content['header_left']; ?></div>
    </div>

    <div class="panel-panel panel-col">
      <div class="inside"><?php print $content['header_center']; ?></div>
    </div>

    <div class="panel-panel panel-col-last">
      <div class="inside"><?php print $content['header_right']; ?></div>
    </div>
  </div>

  <?php if ($content['header_bottom']): ?>
    <div class="panel-panel panel-col-bottom">
      <div class="inside"><?php print $content['header_bottom']; ?></div>
    </div>
  <?php endif ?>
</div>