<div class="panel-display <?php print $classes ?>  clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['main']): ?>
    <div class="panel-panel">
      <div class="inside"><?php print $content['main']; ?></div>
    </div>
  <?php endif ?>
</div>
