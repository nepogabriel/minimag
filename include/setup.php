<?php

//Register Custom Navigation Walker
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//carregar css e js
function gm_theme_styles() {
    //CSS
    wp_enqueue_style('bootsrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('template_css', get_template_directory_uri().'/assets/css/template.css');

    //JS
    
    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('script_js', get_template_directory_uri().'/assets/js/script.js', array ('jquery', 'bootstrap_js'), false, true);
}

//carrega ações dps que o tema termina de carregar completamente
function gm_after_setup() {
    //Hablitações
        //thumbnails
        add_theme_support("post-thumbnails");
        //título
        add_theme_support("title-tag");
        //logo
        add_theme_support("custom-logo");

    //Registrando os Menus
        register_nav_menu("primary", "Menu Principal");
        register_nav_menu("top", "Menu Topo");
}

//iniciar widgets
function gm_widgtes() {

    register_sidebar( array(
        'name' => 'Sidebar Lateral',
        'id' => 'gm_sidebar',
        'description' => 'sidebar lateral',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));

    register_sidebar( array(
        'name' => 'Sidebar Rodapé',
        'id' => 'gm_footersidebar',
        'description' => 'Sidebar Rodapé',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));


}