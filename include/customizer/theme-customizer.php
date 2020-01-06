<?php
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/layout.php';

//registrar costumizações
function gm_costumize_register( $wp_customize ) {

    //Sobrescrevendo Config do Personalizar
    $wp_customize->get_section('title_tagline')->panel = 'opcoes';
    $wp_customize->get_section('custom_css')->description = '';

    //Criando Painel no Personalizar
    $wp_customize->add_panel('opcoes', array(
        'title' => 'Opções do Tema',
        'priority' => 1
    ));

    gm_social_customizer( $wp_customize );

    gm_layout_customizer( $wp_customize );

    // P/ achar o codigo p/ Sobrescrever config do WP
    /*echo '<pre>';
    print_r( $wp_customize );
    echo '</pre>';*/

}