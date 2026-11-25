<?php
// Charge le CSS et le JS du thème enfant
function eco_challenge_assets() {
    wp_enqueue_style( 'eco-challenge-style', get_stylesheet_uri() );

    // Composant carte (.eco-card)
    wp_enqueue_style(
        'eco-card',
        get_stylesheet_directory_uri() . '/assets/css/components/card.css',
        array( 'eco-challenge-style' ),
        filemtime( get_stylesheet_directory() . '/assets/css/components/card.css' )
    );
}
add_action( 'wp_enqueue_scripts', 'eco_challenge_assets' );

// Charge aussi le composant carte dans l'éditeur Gutenberg, pour voir le rendu en direct
function eco_challenge_editor_styles() {
    add_editor_style( 'assets/css/components/card.css' );
}
add_action( 'after_setup_theme', 'eco_challenge_editor_styles' );
