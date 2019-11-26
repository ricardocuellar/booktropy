<?php
/*
    Plugin Name: Booktropy - PostTypes
    Plugin URI:
    Description: Añade Post Types a Booktropy
    Version: 1.0.0
    Author: Ricardo Cuéllar Sánchez
    Author URI:
    Text Domain: booktropy
*/

if(!defined('ABSPATH')) die(); //No deja ver propiedades de este archivo

// Registrar Custom Post Type
// Se realiza el post_type para poder subir libros desde CMD
function booktropy_libros_post_type() {

	$labels = array(
		'name'                  => _x( 'Libros', 'Post Type General Name', 'booktropy' ),
		'singular_name'         => _x( 'Libro', 'Post Type Singular Name', 'booktropy' ),
		'menu_name'             => __( 'Libros', 'booktropy' ),
		'name_admin_bar'        => __( 'Libro', 'booktropy' ),
		'archives'              => __( 'Archivo', 'booktropy' ),
		'attributes'            => __( 'Atributos', 'booktropy' ),
		'parent_item_colon'     => __( 'Libro Padre', 'booktropy' ),
		'all_items'             => __( 'Todos Los Libros', 'booktropy' ),
		'add_new_item'          => __( 'Agregar Libro', 'booktropy' ),
		'add_new'               => __( 'Agregar Libro', 'booktropy' ),
		'new_item'              => __( 'Nuevo Libro', 'booktropy' ),
		'edit_item'             => __( 'Editar Libro', 'booktropy' ),
		'update_item'           => __( 'Actualizar Libro', 'booktropy' ),
		'view_item'             => __( 'Ver Libro', 'booktropy' ),
		'view_items'            => __( 'Ver Libros', 'booktropy' ),
		'search_items'          => __( 'Buscar Libro', 'booktropy' ),
		'not_found'             => __( 'No Encontrado', 'booktropy' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'booktropy' ),
		'featured_image'        => __( 'Imagen Destacada', 'booktropy' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'booktropy' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'booktropy' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'booktropy' ),
		'insert_into_item'      => __( 'Insertar en Libro', 'booktropy' ),
		'uploaded_to_this_item' => __( 'Agregado en Libro', 'booktropy' ),
		'items_list'            => __( 'Lista de Libros', 'booktropy' ),
		'items_list_navigation' => __( 'Navegación de Libros', 'booktropy' ),
		'filter_items_list'     => __( 'Filtrar Libros', 'booktropy' ),
	);
	$args = array(
		'label'                 => __( 'Libro', 'booktropy' ),
		'description'           => __( 'Libros para el Sitio Web', 'booktropy' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'booktropy_libros', $args );

}
add_action( 'init', 'booktropy_libros_post_type', 0 );

?>