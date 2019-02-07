<?php
if(function_exists('acf_add_options_page')){
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

register_nav_menus( array(
	'mainMenu' => 'Hauptmenu',
	'footerMenu' => 'Footer Menu',
) );

add_filter('nav_menu_item_args', function ($args, $item, $depth) {
    if ($args->theme_location == 'mainMenu') {
        $title             = apply_filters('the_title', $item->title, $item->ID);
        $args->link_before = '<span data-hover="' . $title . '">';
        $args->link_after  = '</span>';
    }
    return $args;
}, 10, 3);

add_filter('nav_menu_item_args', function ($args, $item, $depth) {
    if ($args->theme_location == 'footerMenu') {
        $title             = apply_filters('the_title', $item->title, $item->ID);
        $args->link_before = '<span data-hover="' . $title . '">';
        $args->link_after  = '</span>';
    }
    return $args;
}, 10, 3);


?>