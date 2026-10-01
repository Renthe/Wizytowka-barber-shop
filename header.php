<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="nav">
        <div class="logo">
            <h2><?php bloginfo('name'); ?></h2>
        </div>
        <button class="przycisk" id="przycisk">===</button>
        
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'glowne-menu',
            'container'      => false,
            'menu_class'     => 'nav-list',
            'menu_id'        => 'navList'
        ));
        ?>
    </div>
</header>