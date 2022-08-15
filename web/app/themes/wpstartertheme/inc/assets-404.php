<?php 
/**
 * Chargement des assets : CSS + JS
 */

if ( ! defined('ABSPATH') ) {
    exit;
}

function wpstarter_register_assets_404() {

    // Exemple d'assets conditionnels, lié aux pages 404
    if( is_404() ) {
        var_dump('404');
        // Déclarer le JS
        wp_enqueue_script( 
            'wpstarter-404', 
            get_template_directory_uri() . '/assets/js/script-404.js', 
            '1.0', // Penser à incrémenter quand on fait des modifs pour invalider le cache       
            true
        );
            
        // Déclarer le fichier CSS 
        wp_enqueue_style( 
            'wpstarter-404', 
            get_template_directory_uri() . '/assets/css/styles-404.css',
            array(), 
            '1.0' // Penser à incrémenter quand on fait des modifs pour invalider le cache        
        );
    }
}
add_action( 'wp_enqueue_scripts', 'wpstarter_register_assets_404' );