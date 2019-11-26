
<?php get_header(); ?>



        <div class=" text-center">
        <div class="site-header-hero hero">
            <h1><?php the_field('titulopage'); ?></h1>
        <div class="contenedor-principal">    
        <?php get_template_part('template-parts/paginas'); ?>
        <p><?php the_content();?></p>
        </div>
        </div>

        <main class="contenedor pagina seccion no-sidebar">
        
            <ul class="info">
                <li class="clase card-info">
                    <div class="contenido">
                        <img src="<?php the_field('imagen');?>" alt="Imagen">
                    </div>
                </li>
                <li class="clase card-info">
                    <div class="contenido">
                        <h3><?php the_field('frase_producto') ?></h3>
                        <br>
                        <p><?php the_field('mini_descripcion');?></p>
                        <a class="boton boton-obtener" href="<?php echo esc_url(home_url('/ebooks')); ?>">VER LIBROS</a>
                    </div>
                </li>
            </ul>

        </div>

    </main>


<?php get_footer(); ?>
