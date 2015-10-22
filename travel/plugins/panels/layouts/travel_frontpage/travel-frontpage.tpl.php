<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['content']): ?>
      <?php print $content['content']; ?>
  <?php endif ?>
</div>
