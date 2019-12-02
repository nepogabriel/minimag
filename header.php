<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header>
            <!-- MENU TOPO (ñ está funcinando corretamente) -->
            <div class="top_header">
                <nav class="navbar navbar-dafault">
                    <div class="container">

                        <?php
                            if(has_nav_menu('topo')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'topo',
                                    'container' => false,
                                    'fallback_cb' => false,
                                    'menu_class' => 'nav navbar-nav'
                                ));
                            }
                        ?>
                    </div>
                </nav>
            </div>
            
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
                                <?php get_search_form(); ?>
                            </div>
                        </div>

                        <div class="main_info">
                            <div class="row">
                                <!-- Sugerir post aleatorio -->
                                <div class="col-sm-8 postaleatorio">
                                    <strong>Você já viu?</strong>
                                    <?php
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
                                    ?>
                                </div>
                                
                                <!-- Área de rede social -->
                                <div class="col-sm-4 socialarea">
                                    <div class="socialtxt">
                                        <strong>SIGA:</strong>
                                    </div>

                                    <div class="socialicons">
                                        <a href="https://twitter.com" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png" alt="Twitter">
                                        </a>

                                        <a href="https://facebook.com" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="Facebook">
                                        </a>

                                        <a href="https://instagram.com" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="Instagram">
                                        </a>
                                        
                                        <a href="https://youtube.com" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.png" alt="YouTube">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div>

                </div>
            </div>

        </header>