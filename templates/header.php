<header id="header">
  <div class="row">
    <div class="col-xs-9 col-sm-4">
      <h1 id="logo" class="textual">
        <span>
          <a href="<?= esc_url(home_url('/')); ?>">
            <?php bloginfo( 'name'); ?>
          </a>
        </span>
      </h1>
    </div>
    <div class="col-xs-3 col-sm-8">
      <nav id="nav">
        <?php if (has_nav_menu( 'primary_navigation')) : wp_nav_menu([ 'theme_location'=>'primary_navigation', 'menu_class' => 'nav']); endif; ?>
      </nav>
    </div>
  </div>
</header>