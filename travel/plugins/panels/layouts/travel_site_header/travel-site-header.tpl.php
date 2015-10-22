<!--Header Navigation-->
 <div class="navbar-fixed <?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
              <?php if (!empty($content['header_logo'])): ?>
                <?php print $content['header_logo']; ?>
              <?php endif; ?>
              <?php if (!empty($content['header_menu'])): ?>
                <?php print $content['header_menu']; ?>
              <?php endif; ?>
            </div>
        </div>
    </nav>
</div>