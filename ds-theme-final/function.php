<?php
function ds_theme_load_script(): void{
    wp_enqueue_style('dstheme-syle', get_stylesheet_uri(), array(), filemtime(filename: get_template_deirectory().'./style.css'),'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null); 
    wp_enqueue_script('dropdown', get_template_directory_uri().'js/dropwdown.js', array(), '1.0', true);

}
add_action('wp_equeue_scripts', 'ds_theme_load_scripts');

redister_nav_menu(
    array(
        'wp_devs_main_menu'=>'Main Menu',
        'wp_devs_footer_menu' => 'Footer Menu'
    )
    );
?>