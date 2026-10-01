<?php

function dodaj_style_i_skrypty() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_template_directory_uri() . '/javascript.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'dodaj_style_i_skrypty');

function rejestruj_menu() {
    register_nav_menu('glowne-menu', 'Główne Menu');
}
add_action('after_setup_theme', 'rejestruj_menu');