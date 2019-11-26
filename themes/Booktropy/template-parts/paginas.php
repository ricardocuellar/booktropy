<?php
        //Loop de wordpress
        while(have_posts()): the_post();

        //Si nos encontramos en una página con propiedad booktropy_libros le asignamos un tamaño especial a la imagen.
        if(get_post_type() == 'booktropy_libros'){

                if(has_post_thumbnail()):
                        the_post_thumbnail('libro'); 
                         
                ?>
        <div class="alinearCenter">
    <a class="boton boton-descarga text-center" href="<?php the_field('libro_archivo'); ?>">Descargar Libro</a>
    </div>                
    <?php endif; ?>
    
    
    
                <?php 
                //Si no es la página booktropy_libros se imprime la imagen con el tamaño normal
                }else{
                if(has_post_thumbnail()):
                
                the_post_thumbnail(); 
                endif;
                
                ?>
               
              

                <?php
        
                
                }
        ?>

    

<?php endwhile; ?> 