<?php

//*****FUNCIONES******/
    //Función menus, se puede agregar más usando el array. 
    function booktropy_menus(){
        //array de menus
        register_nav_menus(array(
            'menu-principal' => __( 'Menu Principal', 'booktropy' ) 
        ));
    }

    //Hook de  menú.
    add_action('init','booktropy_menus'); //Inicia menú cuando se inicialice. 

    //Styles y Scripts
    function booktropy_scripts_styles(){
        /***************STYLES*****************/
        //Agregando Normalize al proyecto
        wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css',array(),'8.0.1');

        //Agregamos estilos de Slicknav
        wp_enqueue_style('slicknavCSS', get_template_directory_uri().'/css/slicknav.min.css',array(),'1.0.0');

        //Agregando fuentes al proyecto
        wp_enqueue_style('googleFont','https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:400,700&display=swap',array(),'1.0.0');

        //Agregamos la hoja de estilos principal.
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','googleFont'),'1.0.0'); //En la dependencia se carga primero normalize y googleFont.

        
        /****************SCRIPTS**************/
        wp_enqueue_script('slicknavJS',get_template_directory_uri().'/js/jquery.slicknav.min.js',array('jquery'),'1.0.0',true);
        wp_enqueue_script('scripts',get_template_directory_uri().'/js/scripts.js',array('jquery','slicknavJS'),'1.0.0',true);


    }

    //Hooks styles y scripts
    add_action('wp_enqueue_scripts','booktropy_scripts_styles');


    

?>