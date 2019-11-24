<?php
        //Loop de wordpress
        while(have_posts()): the_post();
    ?>

    <h1 class="text-center texto-primario"><?php the_title();?></h1>
    <?php if(has_post_thumbnail()):
            the_post_thumbnail(); 
        endif;
        ?>

    <?php the_content(); ?>


    <?php endwhile; ?> 