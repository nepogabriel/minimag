<?php
//Include
require get_template_directory().'/include/setup.php';
require get_template_directory().'/include/customizer/theme-customizer.php';

//Hooks
//carregar css e js
add_action("wp_enqueue_scripts", "gm_theme_styles");

//carrega ações dps que o tema termina de carregar completamente
add_action("after_setup_theme", "gm_after_setup");

//iniciar widgets
add_action("widgets_init", "gm_widgtes");

//registrar costumizações
add_action("customize_register", "gm_costumize_register");
