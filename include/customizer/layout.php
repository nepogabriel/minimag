<?php
function gm_layout_customizer( $wp_customize ) {

    // 1- Settings
    $wp_customize->add_setting('gm_topmenu_show', array('default' => 'yes'));
    $wp_customize->add_setting('gm_search_show', array('default' => 'yes'));
    $wp_customize->add_setting('gm_privacy_url', array('default' => '#'));

    // 2- Sections
    $wp_customize->add_section('gm_layout_section', array(
        'title' => 'Opções de Layout Topo',
        'priority' => 1,
        'panel' => 'opcoes'
    ));

    // 3- Controllers
    //Menu Topo
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gm_topmenu_show',
            array(
                'label' => 'Mostrar Menu Superior',
                'section' => 'gm_layout_section',
                'settings' => 'gm_topmenu_show',
                'type' => 'checkbox', // types: text, textarea(p/ texto), checkbox, select, radio, dropdown-pages
                'choices' => array( // Usa o choices quando usa o checkbox, radios, seclect.
                    'yes' => 'sim'
                )
            )
        )
    );

    //Formulário de Busca
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gm_search_show',
            array(
                'label' => 'Mostrar Busca',
                'section' => 'gm_layout_section',
                'settings' => 'gm_search_show',
                'type' => 'checkbox',
                'choices' => array(
                    'yes' => 'sim'
                )
            )
        )
    );

    //Link Pol. de Priv. Rodapé
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gm_privacy_url',
            array(
                'label' => 'Página de Política de Privacidade',
                'section' => 'gm_layout_section',
                'settings' => 'gm_privacy_url',
                'type' => 'dropdown-pages'
            )
        )
    );

}