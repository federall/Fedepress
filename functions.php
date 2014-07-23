<?php
// Ajoute le support des images à la une.

add_theme_support( 'post-thumbnails' );

// Ajout d'un menu. (Tableau de bord -> Apparence -> Menus -> Créer le menu -> Menu principal -> Enregistrer le menu)

function register_menu() {
  register_nav_menu( 'header', __( 'Menu principal', 'fedepress' ) );
}
add_action( 'init', 'register_menu' );

// Ajout de la sidebar principale.

function fedepress_sidebar() {
  register_sidebar( [
    'id'            => 'sidebar',
    'name'          => __( 'Barre latérale', 'fedepress' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h1>',
    'after_title'   => '</h1>'
  ] );
}
add_action( 'widgets_init', 'fedepress_sidebar' );

// Supprime les merdes de WPML.

define( 'ICL_DONT_LOAD_NAVIGATION_CSS', true );
define( 'ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true );
define( 'ICL_DONT_LOAD_LANGUAGES_JS', true );

function fedepress_styles_scripts() {
  // Ajout du CSS.

  wp_enqueue_style( 'fedepress-css', get_stylesheet_uri() );

  // Ajout du dernier jQuery.

  wp_deregister_script( 'jquery' );
  wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', [], '', true );
}
add_action( 'wp_enqueue_scripts', 'fedepress_styles_scripts' );
?>
