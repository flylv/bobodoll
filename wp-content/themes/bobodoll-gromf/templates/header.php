<div class="contain-to-grid">
  <header>
    <div class="language"><div class="row"><?php do_action('icl_language_selector'); ?></div></div>
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">

        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo('name'); ?>" class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.jpg" alt="logo">
        </a></h1>

        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

      <section class="top-bar-section">
        <?php if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif; ?>
      </section>   

      <section class="header-search show-for-large-up"><?php get_template_part('templates/search-form-header'); ?></section>    
    </nav>

  </header>
</div> <!-- contain-to-grid -->