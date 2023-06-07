<?php
add_filter('use_block_editor_for_post', '__return_false');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_action('init', 'register_menu_header');

function register_menu_header()
{
    register_nav_menu('menu-header', __('Menu header'));
}
