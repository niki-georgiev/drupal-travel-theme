<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($rows as $id => $row): ?>
    <div class="col s12 m4 l4">
      <?php print $row; ?>
  </div>
<?php endforeach; ?>
