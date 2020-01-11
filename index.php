<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 maincontent">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>

                        <?php the_post(); ?>

                        <?php get_template_part('template_parts/post'); ?>

                    <?php endwhile; ?>

                    <!-- Páginação -->
                    <div class="post_pag">

                        <?php
                            global $wp_query;
                            echo paginate_links( array(
                                'current' => max(1, get_query_var('paged')), //p/ retornar pág atual (se for 0(pág. inicial) retornar 1)
                                'total' => $wp_query->max_num_pages, //nº total de págs
                                'show_all' => false, //ver ou não todas as pág.
                                'end_size' => 2, //qnts págs. irá aparecer dps dos '...'
                                'mid_size' => 2, //qnts págg irá mostrar dps e antes da pág atual
                                'prev_next' => true, //habilitar ou não botões ant. e prox.
                                'prev_text' => '<',
                                'next_text' => '>',
                                'before_page_number' => '{',
                                'after_page_number' => '}'
                            ));
                        ?>
                        
                        <!-- Páginação padrão do WP
                        <div class="previous_pag"> <?php previous_posts_link('< Página Anterior'); ?> </div>
                        <div class="next_pag"> <?php next_posts_link('Próxima Página >'); ?> </div>
                        -->
                        <div style="clear:both"></div>
                    </div>

                <?php endif; ?>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>