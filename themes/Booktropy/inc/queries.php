<?php
//Query del catalogo de libros
    function booktropy_lista_libros(){ ?>

        <ul class="lista-libros">
            <?php 
                $args = array(
                    'post_type' => 'booktropy_libros',
                    'post_per_page' => 100,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );

                //Mostramos los libros en un catalogo
                $libros = new WP_Query($args);
                while( $libros -> have_posts()): $libros->the_post(); ?>

                <li class="clase card">
                    <?php the_post_thumbnail('portrait');?>
                    <div class="contenido">
                        <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                        </a>
                        <p><?php the_field('autor'); ?></p>
                        <a class="boton boton-obtener" href="<?php the_permalink(); ?>">Obtener Libro</a>
                    </div>
                </li>

          <?php endwhile; wp_reset_postdata(); ?>

        </ul>

<?php

    }

?>