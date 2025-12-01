<?php
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="hodja-header" role="banner">
    <div class="hodja-header__container">

      <!-- Logo -->
      <a class="hodja-header__logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Hodja Auto">
        <img
          src="https://hodjaauto.alwaysdata.net/wp-content/uploads/2025/10/logo_uden.png"
          alt="Hodja Auto"
          width="180"
          height="48"
          loading="eager"
          decoding="async">
      </a>

      <button class="hodja-header__toggle" aria-expanded="false" aria-controls="primary-menu">
        <span class="hodja-header__toggle-bar"></span>
        <span class="hodja-header__toggle-bar"></span>
        <span class="hodja-header__toggle-bar"></span>
        <span class="hodja-header__toggle-label">Menu</span>
      </button>

      <nav class="hodja-header__nav" aria-label="<?php esc_attr_e('Hovedmenu', 'hodja'); ?>">
        <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'hodja-header__menu',
          'menu_id'        => 'primary-menu',
          'fallback_cb'    => '__return_empty_string',
          'depth'          => 3,
        ]);
        ?>
      </nav>

      <a class="hodja-header__cta" href="<?php echo esc_url(home_url('/booking/')); ?>">
        <?php esc_html_e('Book tid', 'hodja'); ?>
      </a>

    </div>
  </header>
