<?php
/**
 * Sydney functions and definitions
 *
 * @package Sydney
 */

/**
 * Importamos la hoja de estilos padre
 */
function enqueue_parent_theme_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_theme_styles');


/**
 * BEGIN :: Entradas personalizadas (Custom Posts)
 * Documentación oficial URI: https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/

* function wporg_custom_post_type() {
*  register_post_type('wporg_product',
*    array(
*      'labels'      => array(
*        'name'          => __('Productos', 'textdomain'),
*        'singular_name' => __('Producto', 'textdomain'),
*      ),
*      'public'      => true,
*      'has_archive' => true,
*    )
*  );
* }
* add_action('init', 'wporg_custom_post_type');

 * END :: Entradas personalizadas (Custom Posts)
 */
 