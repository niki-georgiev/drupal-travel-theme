<div class="panel-display simple-nav <?php print $classes ?>  clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php  $src = file_create_url(path_to_theme() . '/logo.png'); ?>
     <!--Navigation-->
     <div class="navbar-fixed <?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
        <nav id="nav_f" class="default_color" role="navigation">
            <div class="container">
                <div class="nav-wrapper">
               <?php print l('<img src="' . $src . '" alt="Travel Logo"/>', "", array('html'=>TRUE, 'attributes' => array('id' => 'logo-container', 'class' => 'brand-logo'))); ?>
                  <?php if ($content['nav']): ?>
                    <?php print $content['nav']; ?>
                  <?php endif ?>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>

