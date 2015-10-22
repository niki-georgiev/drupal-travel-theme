<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if (!empty($content['header'])): ?>
    <?php print $content['header']; ?>
  <?php endif; ?>
  <?php if (!empty($content['msg'])): ?>
    <?php print $content['msg']; ?>
  <?php endif; ?>
  <?php if (!empty($content['content'])): ?>
    <?php print $content['content']; ?>
  <?php endif; ?>
  <?php if (!empty($content['footer'])): ?>
    <?php print $content['footer']; ?>
  <?php endif; ?>
</div>
