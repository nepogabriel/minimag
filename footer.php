        
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
                    <p>&copy; Todos os direitos reservados.</p>
                </div>

                <div class="mainfooter_right">
                    <p>Desenvolvido por <strong>Gabriel Ribeiro</strong></p>
                </div>

                <div class="mainfooter_scroll">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seta-up.png">
                </div>
            </div>
        </footer>
        
        <?php wp_footer(); ?>
    </body>
</html>