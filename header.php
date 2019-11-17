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
                    <div class="container-fluid">

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
                <div class="container-fluid">

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
                                <div class="col-sm-8">
                                    ...
                                </div>

                                <div class="col-sm-4 socialarea">
                                    ...
                                </div>
                            </div>
                        </div>
                    <div>

                </div>
            </div>

        </header>