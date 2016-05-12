<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
    <?php /*
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png">

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="House Advantage"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/mstile-310x310.png" />

    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon-16x16.png" sizes="16x16" />
     */ ?>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php do_action( 'foundationpress_after_body' ); ?>

  <?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
    <?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
  <?php endif; ?>

  <?php do_action( 'foundationpress_layout_start' ); ?>

  <div id="masthead" class="site-header" role="banner">
    <div class="title-bar" data-responsive-toggle="site-navigation">
      <button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
      <div class="title-bar-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">House Advantage</a>
      </div>
    </div>

    <nav id="site-navigation" class="main-navigation top-bar" role="navigation">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="home">
            <a class="site-nav__home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <svg class="site-nav__logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 194.44 108.15"><defs><linearGradient id="a" y1="57.99" x2="77.88" y2="57.99" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#6c2d1a"/><stop offset="0.44" stop-color="#ee2924"/><stop offset="1" stop-color="#4b1414"/></linearGradient><linearGradient id="b" x1="71.99" y1="41.51" x2="0" y2="41.51" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#a31d21"/><stop offset="0.42" stop-color="#ee2c25"/><stop offset="1" stop-color="#842719"/></linearGradient><linearGradient id="c" y1="45.42" x2="68.58" y2="45.42" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#6d0d12"/><stop offset="0.51" stop-color="#bf2026"/><stop offset="1" stop-color="#691c15"/></linearGradient></defs><title>HA_Logo_Color_Horizontal-2</title><polygon points="0 54.84 40.11 0 79.74 54.84 40.11 108.15 0 54.84" fill="#ee3724"/><polygon points="0 54.84 40.11 108.15 77.88 57.33 34.38 7.83 0 54.84" opacity="0.72" fill="url(#a)"/><polygon points="0 54.84 21.2 83.01 71.99 44.11 40.11 0 0 54.84" fill="url(#b)"/><polygon points="0 54.84 34.38 7.83 68.58 46.72 21.2 83.01 0 54.84" fill="url(#c)"/><polygon points="64.31 28.08 50.41 28.08 50.41 55.08 29.7 55.08 29.7 28.08 15.7 28.08 15.7 95.08 29.7 95.08 29.7 68.08 50.4 68.08 50.41 95.08 64.32 95.08 64.31 28.08" fill="#fff"/><path d="M55.33,40L33.83,90.38l1.51,2L43,74H67.71l7.62,18.28,1.34-1.81ZM43.69,72L55.34,44,67,72H43.69Z" transform="translate(-15.3 -10.92)" fill="#b4b4b4"/><path d="M124.27,64.44h-4.34V54.33H109.08V64.44h-4.34V41.3h4.34v10h10.85v-10h4.34V64.44Z" transform="translate(-15.3 -10.92)" fill="#aeb4b7"/><path d="M139.41,64.7c-7,0-11.75-5-11.75-11.83S132.4,41,139.41,41s11.72,5,11.72,11.83S146.41,64.7,139.41,64.7Zm0-20c-4.53,0-7.35,3.09-7.35,8.16S134.88,61,139.41,61s7.3-3.07,7.3-8.15S143.94,44.71,139.41,44.71Z" transform="translate(-15.3 -10.92)" fill="#aeb4b7"/><path d="M169.13,55.16V41.3h4.31V55.16c0,5.52-3.67,9.54-9.6,9.54s-9.59-4-9.59-9.54V41.3h4.31V55.14c0,3.52,2,5.83,5.28,5.83S169.13,58.68,169.13,55.16Z" transform="translate(-15.3 -10.92)" fill="#aeb4b7"/><path d="M190.21,45.51a1,1,0,0,1-1,.64c-0.86,0-2-1.6-4.66-1.6-2.37,0-3.59,1.2-3.59,2.91,0,4.39,10.68,2,10.68,9.73,0,4.18-2.93,7.51-8,7.51a10.85,10.85,0,0,1-7.6-3l1.25-2.06a1.26,1.26,0,0,1,1-.53c1.07,0,2.32,2.11,5.51,2.11,2.45,0,3.86-1.2,3.86-3.38,0-4.9-10.66-1.65-10.66-10.12,0-3.39,2.75-6.64,7.57-6.64a9.65,9.65,0,0,1,6.72,2.43Z" transform="translate(-15.3 -10.92)" fill="#aeb4b7"/><path d="M209.58,41.3v3.43H199.32v6.42h8.08v3.31h-8.08V61h10.26v3.44H195V41.3h14.6Z" transform="translate(-15.3 -10.92)" fill="#aeb4b7"/><path d="M115.16,83.68h-1.87a0.82,0.82,0,0,1-.81-0.55l-1-2.66h-5.39l-1,2.66a0.85,0.85,0,0,1-.8.55h-1.88l5.11-13H110Zm-8.43-4.92h4.15l-1.58-4.33c-0.14-.39-0.32-0.92-0.5-1.53-0.17.61-.33,1.15-0.49,1.55Z" transform="translate(-15.3 -10.92)" fill="#696868"/><path d="M121.43,83.68h-5v-13h5A6.51,6.51,0,1,1,121.43,83.68Zm0-11.09H118.9v9.16h2.53c2.54,0,4.11-1.73,4.11-4.58S124,72.59,121.43,72.59Z" transform="translate(-15.3 -10.92)" fill="#696868"/><path d="M128.1,70.66h2a0.82,0.82,0,0,1,.81.55l3.06,7.94a14.36,14.36,0,0,1,.56,1.83,10.6,10.6,0,0,1,.51-1.83L138,71.21a0.86,0.86,0,0,1,.8-0.55h2l-5.26,13h-2.19Z" transform="translate(-15.3 -10.92)" fill="#696868"/><path d="M152,83.68h-1.87a0.82,0.82,0,0,1-.81-0.55l-1-2.66H143l-1,2.66a0.85,0.85,0,0,1-.8.55h-1.88l5.11-13h2.48Zm-8.43-4.92h4.15l-1.58-4.33c-0.14-.39-0.32-0.92-0.5-1.53-0.17.61-.33,1.15-0.49,1.55Z" transform="translate(-15.3 -10.92)" fill="#696868"/><path d="M155.42,71l6.83,8.71a11.07,11.07,0,0,1-.06-1.18V70.66h2.13v13h-1.25a0.92,0.92,0,0,1-.85-0.41l-6.81-8.67c0,0.39.05,0.77,0.05,1.09v8h-2.13v-13h1.27A0.79,0.79,0,0,1,155.42,71Z" transform="translate(-15.3 -10.92)" fill="#696868"/><path d="M176.09,70.66v2h-3.92v11h-2.42v-11h-3.93v-2h10.27Z" transform="translate(-15.3 -10.92)" fill="#696868"/><path d="M187.71,83.68h-1.87a0.82,0.82,0,0,1-.81-0.55l-1-2.66h-5.39l-1,2.66a0.85,0.85,0,0,1-.8.55H175l5.11-13h2.48Zm-8.43-4.92h4.15l-1.58-4.33c-0.14-.39-0.32-0.92-0.5-1.53-0.17.61-.33,1.15-0.49,1.55Z" transform="translate(-15.3 -10.92)" fill="#696868"/><path d="M197.11,81.34V79h-1.63a0.46,0.46,0,0,1-.5-0.45V77.15h4.33v5.27a7.9,7.9,0,0,1-5,1.4,6.38,6.38,0,0,1-6.54-6.65c0-3.93,2.63-6.65,6.77-6.65a6.67,6.67,0,0,1,4.74,1.7l-0.7,1.1a0.62,0.62,0,0,1-.55.33,0.8,0.8,0,0,1-.44-0.14,5.27,5.27,0,0,0-3.12-.93c-2.57,0-4.21,1.81-4.21,4.59,0,3,1.77,4.73,4.26,4.73A5.6,5.6,0,0,0,197.11,81.34Z" transform="translate(-15.3 -10.92)" fill="#696868"/><path d="M209.74,70.66v1.93H204V76.2h4.55v1.86H204v3.68h5.77v1.94h-8.21v-13h8.21Z" transform="translate(-15.3 -10.92)" fill="#696868"/></svg>
            </a>
          </li>
        </ul>
      </div>
      <div class="top-bar-right">
        <?php foundationpress_top_bar_r(); ?>

        <?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
          <?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
        <?php endif; ?>
      </div>
    </nav>
  </div>

  <section class="container">
    <?php do_action( 'foundationpress_after_header' );
