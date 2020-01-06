<?php
function gm_social_customizer( $wp_customize ) {
    // 1- Settings
    $wp_customize->add_setting('gm_twitter', array('default'=>''));
    $wp_customize->add_setting('gm_facebook', array('default'=>'#'));
    $wp_customize->add_setting('gm_instagram', array('default'=>''));
    $wp_customize->add_setting('gm_youtube', array('default'=>''));

    // 2- Sections
    $wp_customize->add_section('gm_social_section', array(
        'title' => 'Redes Sociais',
        'priority' => 2,
        'panel' => 'opcoes'
    ));

    // 3- Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gm_twitter',
            array(
                'label' => 'Link do Twitter', // título
                'section' => 'gm_social_section', // seção que pertence
                'settings' => 'gm_twitter', // setting que pertence
                'type' => 'text' // tipo do campo
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gm_facebook',
            array(
                'label' => 'Link do Facebook',
                'section' => 'gm_social_section',
                'settings' => 'gm_facebook',
                'type' =>'text'

            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gm_instagram',
            array(
                'label' => 'Link do Instagram',
                'section' => 'gm_social_section',
                'settings' => 'gm_instagram',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gm_youtube',
            array(
                'label' => 'Link do Yooutube',
                'section' => 'gm_social_section',
                'settings' => 'gm_youtube',
                'type' => 'text'
            )
        )
    );

}