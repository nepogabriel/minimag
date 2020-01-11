<article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
        <div class="post_item">

            <!-- número de comentários -->
            <div class="post_comment_area">
                <?php comments_number('0', '1', '%'); ?>
            </div>

            <!-- thumbnail -->
            <div class="post_info">

                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('medium', array('class' => 'post_thumb')); ?>
                <?php endif; ?>

                <div class="post_date"> <?php echo get_the_date(); ?> </div>

                <div class="post_title"> <?php the_title(); ?> </div>

                <div class="post_excerpt"> <?php the_excerpt(); ?> </div>

            </div>
            
        </div>
    </a> 
</article>