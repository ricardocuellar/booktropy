<?php
        //Loop de wordpress
        while(have_posts()): the_post();

        if(get_post_type() == 'booktropy_libros'){

                if(has_post_thumbnail()):
                        the_post_thumbnail('libro'); 
                         
                ?>
        <div class="alinearCenter">
    <a class="boton boton-descarga text-center" href="<?php the_field('libro_archivo'); ?>">Descargar Libro</a>
    </div>                
    <?php endif; ?>
    
    
    
                <?php }else{
                if(has_post_thumbnail()):
                
                the_post_thumbnail(); 
                endif;
                
                ?>
               
              

                <?php
        
                
                }
        ?>

    

<?php endwhile; ?> 