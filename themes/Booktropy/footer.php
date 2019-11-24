
    <footer class="site-footer contenedor">
        <hr>
        <div class="contenido-footer">

        <p class="copyright">Términos y condiciones. <?php echo get_bloginfo('name');?></p>

        <?php //Menú de navegación
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
            ?>

        </div>
    </footer>

    <?php wp_footer();?>
</body>
</html>