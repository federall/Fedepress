<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>
    <?php
    if ( is_home() ) :
      echo get_bloginfo( 'name' ) . ' — ' . get_bloginfo( 'description' );
    else :
      wp_title( '—', true, 'right' ); bloginfo( 'name' );
    endif;
    ?>
  </title>

  <!--[if lt IE 9]>
    <script src="<?= get_template_directory_uri(); ?>/packages/html5shiv/dist/html5shiv.min.js"></script>
  <![endif]-->

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div class="site">

  <header class="site-header">

    <div class="site-brand">
      <h1><a href="<?= get_home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
      <?php if ( get_bloginfo( 'description' ) ) : ?>
        <h2><?php bloginfo( 'description' ); ?></h2>
      <?php endif; ?>
    </div><!-- /.site-brand -->

    <nav class="site-nav">
      <?php wp_nav_menu( [

      ] ); ?>
    </nav><!-- /.site-nav -->

  </header><!-- /.site-header -->

  <div class="site-content">
