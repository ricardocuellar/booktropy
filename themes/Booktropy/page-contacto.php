<?php get_header(); ?>

<main class="contenedor pagina seccion no-sidebar">
    <div class="contenido-principal text-center">
        <?php get_template_part('template-parts/paginas'); ?>
        <h1><?php the_title(); ?></h1>
        <h4><?php the_content(); ?></h4>
    </div>
    
    

</main>

<?php get_footer(); ?>
