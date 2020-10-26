<?php

// MENU PRINCIPAL
function doctheme_nav(){
    wp_nav_menu(
    array(
        'theme_location'  => 'menu-principal',
        'container'       => '',
        'container_class' => '',
        'menu_class'      => 'nav flex-column'
        )
    );
}

register_nav_menu( 'menu-principal', 'Menu Principal' );