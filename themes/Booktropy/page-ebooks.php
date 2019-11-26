
<?php get_header(); ?>



        <div class=" text-center">
        <div class="site-header-hero hero">
        <div class="contenedor-principal">    
        <?php get_template_part('template-parts/paginas'); ?>
        <h3><?php the_title();?></h3>
        <p><?php the_content();?></p>
        </div>
        </div>

        <main class="contenedor pagina seccion no-sidebar">
        
        <?php booktropy_lista_libros(); ?>
        </div>

    </main>


<?php get_footer(); ?>
