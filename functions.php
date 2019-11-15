<?php
//Include
require get_template_directory_uri().'/include/setup.php';

//Hooks
//carregar css e js
add_action("wp_enqueue_scripts", "gm_theme_styles");
//carrega ações dps que o tema termina de carregar completamente
add_action("after_setup_theme", "gm_after_setup");
//iniciar widgets
add_action("widgets_init", "gm_widgtes");