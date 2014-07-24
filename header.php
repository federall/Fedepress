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
    </div>

    <nav class="site-nav">
      <?php
      $menu_slug = 'header';
      $nav_menu_locations = get_nav_menu_locations();

      if ( array_key_exists( 'header', $nav_menu_locations ) ) {
        $menu = wp_get_nav_menu_object( $nav_menu_locations[$menu_slug] );

        $menu_items = wp_get_nav_menu_items( $menu->term_id );

        $page_id = get_the_ID();

        echo '<ul class="site-nav-menu">';

        foreach ( $menu_items as $key => $menu_item ) {
          if ( !$menu_item->menu_item_parent ) {
            $menu_sub_items = [];
            foreach ( $menu_items as $key_2 => $menu_item_2 ) {
              if ( $menu_item_2->menu_item_parent == $menu_item->ID ) {
                array_push( $menu_sub_items, $menu_item_2 );
              }
            }

            if ( count( $menu_sub_items ) ) {
              echo '<li class="site-nav-item parent">';
              echo '<a href="#">' . $menu_item->title . '</a>';
            }
            else {
              echo '<li class="site-nav-item">';
              echo '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
            }

            if ( count( $menu_sub_items ) ) {
              echo '<ul class="site-nav-sub-menu">';

              foreach ( $menu_sub_items as $menu_sub_item ) {
                echo '<li class="site-nav-sub-item"><a href="' . $menu_sub_item->url . '">' . $menu_sub_item->title . '</a></li>';
              }

              echo '</ul>';
            }

            echo '</li>';
          }
        }

        echo '</ul>';
      }
      ?>
    </nav>

  </header>

  <div class="site-content">
