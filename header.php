<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header>

            <!-- verificar se o menu topo está habilitado -->
            <?php if( get_theme_mod('gm_topmenu_show') == 'yes' ): ?>
                <div class="top_header">
                    <nav class="navbar navbar-expand-md" role="navigation">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                                <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'top',
                                    'depth'             => 2,
                                    'container'         => 'div',
                                    'container_class'   => 'collapse navbar-collapse',
                                    'container_id'      => 'bs-example-navbar-collapse-1',
                                    'menu_class'        => 'nav navbar-nav',
                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'            => new WP_Bootstrap_Navwalker(),
                                ) );
                                ?>
                        </div>
                    </nav>
                </div>
            <?php endif; ?>
            
            <!-- CABEÇALHO -->
            <div class="main_header">
                <div class="container">

                    <!-- logo -->
                    <div class="logo">
                        <?php
                            if(has_custom_logo()){
                                the_custom_logo();
                            }
                        ?>
                    </div>
                    
                    <!-- menu principal -->
                    <div class="main_nav_border">
                        <div class="main_nav">
                            <!--
                                if(has_nav_menu('primary')) {
                                    wp_nav_menu(array(
                                        'theme_location' => 'primary',
                                        'container' => false,
                                        'fallback_cb' => false,
                                        'menu_class' => 'nav navbar-nav'
                                    ));
                                }
                            -->
                            
                            <div class="search_area">
                                <?php
                                    if( get_theme_mod('gm_search_show') == 'yes' ) {
                                        get_search_form();
                                    }
                                ?>
                            </div>
                            
                        </div>
                        
                        <?php //is_home(verificar se está na home), is_single(), is_page, is_search(),
                            if(is_home() || is_single()): 
                        ?>
                        <div class="main_info">
                            <div class="row">
                                <!-- Sugerir post aleatorio -->
                                <div class="col-sm-8 postaleatorio">
                                    <strong>Você já viu?</strong>
                                    <?php
                                        //Verificar se o plugin existe
                                        if(function_exists('wpp_get_mostpopular')) {

                                            wpp_get_mostpopular( array(
                                                'limit' => 1, //limite
                                                'wpp_start' => '', //tirar o html de inicio
                                                'wpp_end' => '', //tirar o html de fim
                                                'post_html' => '<a href="{url}"> {text_title} </a>' //Define a estrutura HTML de cada post
                                            ));

                                        } else {

                                            $gm_query = new WP_Query(array(
                                                'posts_per_page' => 1, //quantidade
                                                'post_type' => 'post', //tipo: somente post
                                                'orderby' => 'rand' //chamar post aleatorio
                                            ));
    
                                            if($gm_query->have_posts()) {
                                                while($gm_query->have_posts()) {
                                                    $gm_query->the_post();
                                                    ?>
                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    <?php
                                                }
                                                //resentando query p/ ñ afetar os outros posts da pág.
                                                wp_reset_postdata();
                                            }

                                        }
                                    ?>
                                </div>
                                
                                <!-- Área de rede social -->
                                <div class="col-sm-4 socialarea">
                                    <div class="socialtxt">
                                        <strong>SIGA:</strong>
                                    </div>

                                    <div class="socialicons">
                                        <!-- Só aparece apenas se tiver link -->
                                        <?php if(get_theme_mod('gm_twitter')): ?>
                                            <a href="<?php echo get_theme_mod('gm_twitter'); ?>" target="_blank">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png" alt="Twitter">
                                            </a>
                                        <?php endif; ?>
                                        
                                        <!-- Aparece sem link -->
                                        <a href="<?php echo get_theme_mod('gm_facebook'); ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="Facebook">
                                        </a>

                                        <a href="<?php echo get_theme_mod('gm_instagram'); ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="Instagram">
                                        </a>
                                        
                                        <a href="<?php echo get_theme_mod('gm_youtube') ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.png" alt="YouTube">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    <div>

                </div>
            </div>

        </header>
        
        <!-- Custom Header -->
        <?php if(get_header_image()): ?>
            <div class="container custom-header">
                <img src="<?php header_image(); ?>" width="<?php //echo get_custom_header()->width; ?>">
            </div>
        <?php endif; ?>