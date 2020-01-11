        
        <footer>
            <div class="footer_widgets">
                <div class="footer_widget">
                    <?php
                        if(is_active_sidebar('gm_footersidebar')) {
                            dynamic_sidebar('gm_footersidebar');
                        }
                    ?>
                </div>
            </div>

            <div class="mainfooter">
                <div class="mainfooter_left">
                    <p>
                        &copy; Todos os direitos reservados. |
                        <?php if(get_theme_mod('gm_privacy_url')): ?>
                            <a href="<?php the_permalink( get_theme_mod('gm_privacy_url') ); ?>">
                                Política de Privacidade
                            </a>
                        <?php endif; ?>
                    </p>
                </div>

                <div class="mainfooter_right">
                    <p>Desenvolvido por <strong>Gabriel Ribeiro</strong></p>
                </div>
                
                <!-- NÃO ESTÁ FUNCIONANDO O SCROLL -->
                <div class="mainfooter_scroll">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seta-up.png">
                </div>
            </div>
        </footer>
        
        <!-- PÁGINAÇÃO AJAX -->
        <script type="text/javascript">
            var ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>";
        </script>

        <?php wp_footer(); ?>
    </body>
</html>