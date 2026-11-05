<?php
// Charge le CSS et le JS du thème enfant
function eco_challenge_assets() {
    wp_enqueue_style( 'eco-challenge-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'eco_challenge_assets' );