<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
	<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="header">
      <h1 class="header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sherpath_logo.svg" alt="Sherpath">
        </a>
      </h1>

      <input type="checkbox" id="menu-toggle" class="menu__toggle">
      <label for="menu-toggle" class="menu__btn">
        <div class="menu-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-hamburger.svg" alt="" class="menu-hamburger">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-cancel.svg" alt="" class="menu-cancel">
        </div>
      </label>

      <div class="header__nav">
        <nav>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/about')); ?>">シェルパスについて</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">事業内容</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">note</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">お知らせ</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
