<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header>

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