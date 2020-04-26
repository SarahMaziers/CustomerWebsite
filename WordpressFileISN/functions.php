<?php

add_filter('upload_mimes', 'wpc_mime_types');
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


register_nav_menus(array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
));

load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

register_sidebar(array(
    'id' => 'blog-sidebar',
    'name' => 'Blog',
));

add_theme_support( 'post-thumbnails' );

function wpb_catlist_desc() {
    $string = '<ul>';
    $catlist = get_terms( 'category' );
    if ( ! empty( $catlist ) ) {
        foreach ( $catlist as $key => $item ) {
            $string .= '<li>'. $item->name . '<br />';
            $string .= '<em>'. $item->description . '</em> </li>';
        }
    }
    $string .= '</ul>';

    return $string;
}
add_shortcode('wpb_categories', 'wpb_catlist_desc');

wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js');
if ( ! isset ( $content_width) )
    $content_width = 1140;
