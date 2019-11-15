<?php
//carregar css e js
function gm_theme_styles() {

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

}