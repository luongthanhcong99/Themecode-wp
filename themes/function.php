<?php
add_action('init', 'post_type_blog');
function post_type_blog()
{
    $label = array(
        'name' => 'Blog',
        'singular_name' => 'All blog'
    );

    $args = array(
        'labels' => $label,
        'description' => 'Post type blog',
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
        ),

        'taxonomies' => array('category', 'post_tag'), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_icon' => 'dashicons-groups',
        'can_export' => true,
        'has_archive' => true, // (month, date, year)
        'publicly_queryable' => true, //query, phải đặt true
        'capability_type' => 'post' //
    );
    register_post_type('blog', $args);
}

// add taxonomy
add_action('init', 'tax_collection', 0);
function tax_collection()
{
    $labels = array(
        'name'                       => 'Bộ sưu tập',
        'singular_name'              => 'Bộ sưu tập',
        'menu_name'                  => 'Bộ sưu tập',
        'all_items'                  => 'Bộ sưu tập',
        'parent_item'                => 'Parent collection',
        'parent_item_colon'          => 'Parent collection:',
        'new_item_name'              => 'New collection Name',
        'add_new_item'               => 'Add New Bộ sưu tập',
        'edit_item'                  => 'Edit bộ sưu tập',
        'update_item'                => 'Update bộ sưu tập',
        'separate_items_with_commas' => 'Separate collection with commas',
        'search_items'               => 'Search bộ sưu tập',
        'add_or_remove_items'        => 'Add or remove bộ sưu tập',
        'choose_from_most_used'      => 'Choose from the most used bộ sưu tập',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy('collection', 'product', $args);
}
