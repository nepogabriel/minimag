Template wordpress criado a partir de um layout em imagem.

Irei explicar detalhadamente as funcionalidades ao final do projeto.


************ Theme Customizer API ************

Processo para criar personalizações:
1- add_action no functions.php
2- criar arquivo theme-customizer.php e criar a função do add_action
3- dps de criar outra função dentro com a ação especifica ex: redes sociais.

-No arq. da função especifica criar na sequencia abaixo (pegar de exemplo no social.php):
4- settings = propriedades que irá salvar dados no banco de dados;
5- sections = grupos de propriedades no personalizar;
6- controllers = campo visual p/ fazer as alterações.
    *types: text, textarea(p/ texto), checkbox, select, radio, dropdown-pages

-Depois ir no arq. e verificar com IF se ação está ativa:

*Só aparece apenas se tiver link
<?php if(get_theme_mod('gm_twitter')): ?>
<?php endif; ?>                                           

Aparece sem link
<?php echo get_theme_mod('gm_twitter'); ?>
                                        
