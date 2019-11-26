<aside class="sidebar">
            <h4>Ebook</h4>
            <?php
            //Loop de wordpress
             while(have_posts()): the_post();
            ?>

            <h3 class="text-center texto-primario"><?php the_title();?></h3>

            <?php
            //Validadamos si el CustomPostType es de libros
            if(get_post_type() == 'booktropy_libros'){
            ?>
               
            <p class="autor">Autor: <?php the_field('autor'); ?></p>    
            <?php 
            $terms = get_field('categoria');
            if( $terms ): ?>
                <ul>
                <?php foreach( $terms as $term ): ?>
                    <p class="categoria">Categorías: <?php echo esc_html( $term->name ); ?></p>
                    
                <?php endforeach; ?>
                </ul>
            <?php endif; ?>
                

            <?php } the_content(); ?>

            <?php endwhile; ?>
</aside>