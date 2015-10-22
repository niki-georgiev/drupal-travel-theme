<div class="container <?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <div class="row">
	<?php if ($content['footer_first']): ?>
	    <div class="col s3">
	      <?php print $content['footer_first']; ?>
	    </div>
	  <?php endif ?>
	  <?php if ($content['footer_second']): ?>
	    <div class="col s3">
	      <?php print $content['footer_second']; ?>
	    </div>
	  <?php endif ?>
	  <?php if ($content['footer_third']): ?>
	    <div class="col s3">
	      <?php print $content['footer_third']; ?>
	    </div>
	  <?php endif ?>
	  <?php if ($content['footer_fourth']): ?>
	    <div class="col s3">
	      <?php print $content['footer_fourth']; ?>
	    </div>
	  <?php endif ?>
     </div>
</div>
