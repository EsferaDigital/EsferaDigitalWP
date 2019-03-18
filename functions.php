<?php
/*
* Theme personalizado para Esfera Digital
*
*@link https://developer.wordpress.org(themes/basic/theme-functions)
*
*@package wordpress
*@subpackage esfera
*@since 2.0.0
*@version 2.0.0
*/

//Establecer variables globales y asignar un valor a esas variables
global $google_fonts;
global $font_awesome;
global $hamburgers;

$google_fonts = 'https://fonts.googleapis.com/css?family=Didact+Gothic|Open+Sans';
$font_awesome = 'https://use.fontawesome.com/releases/v5.7.2/css/all.css';
$hamburgers = 'https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css';

//Establecer el ancho máximo permitido para cualquier contenido en el tema, como por ejemplo, embeds e imágines.
if(!isset($content_width)){
  $content_width = 800;
}
// Cargamos los css y js
if(!function_exists('esfera_scripts')):
  function esfera_scripts() {
    global $google_fonts;
    global $font_awesome;
    global $hamburgers;

    wp_register_style('google-fonts', $google_fonts, array(), '1.0.0', 'all');
    wp_register_style('font-awesome', $font_awesome, array(), '5.7.2', 'all');
    wp_register_style('hamburgers', $hamburgers, array(), '1.1.3', 'all');
    wp_register_style('style', get_stylesheet_uri(), array('google-fonts','font-awesome','hamburgers'), '1.0.0', 'all');

    wp_enqueue_style('google-fonts');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('hamburgers');
    wp_enqueue_style('style');
    wp_enqueue_script('jquery');

    if(is_front_page()):
      wp_register_script('inicio-script', get_template_directory_uri() . '/js/inicio.js', array('jquery'), '1.0.0', true);

      wp_enqueue_script('inicio-script');
    endif;
  }
endif;
add_action( 'wp_enqueue_scripts', 'esfera_scripts' );

//Creamos Menús
if(!function_exists('esfera_menus')):
  function esfera_menus() {
    register_nav_menus(array(
      'menu_main' => __('Menú Principal', 'esfera'),
      'menu_social' => __('Menú Redes Sociales', 'esfera')
    ));
  }
endif;
add_action( 'init', 'esfera_menus' );

// Creamos Widgets
if(!function_exists('esfera_register_sidebars')):
  function esfera_register_sidebars() {

    register_sidebar(array(
      'name' => __('Sidebar Principal', 'esfera'),
      'id' => 'sidebar_main',
      'description' => __('Este es el sidebar principal y aparecerá al lado del contenido principal.', 'esfera'),
      'before_widget' => '<article id="%1$s" class="Widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));

    register_sidebar(array(
      'name' => __('Sidebar del Pié de Página', 'esfera'),
      'id' => 'sidebar_footer',
      'description' => __('Estes es el sidebar del pié de página del sitio.', 'esfera'),
      'before_widget' => '<article id="%1$s" class="Widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
  }
endif;
add_action('widgets_init', 'esfera_register_sidebars');

// Añadimos soportes básicos
if(!function_exists('esfera_setup')):
  function esfera_setup() {
    // soporte a imagen destacada
    add_theme_support('post-thumbnails');

    //soporte a etiquetas semánticas de html5
    add_theme_support('html5', array(
      'comment-list',
      'comment-form',
      'search-form',
      'gallery',
      'caption'
    ));

    // soporte a formatos de entrada
    add_theme_support('post-formats', array(
      'aside',
      'gallery',
      'link',
      'image',
      'quote',
      'status',
      'video',
      'audio',
      'chat'
    ));

    //Paleta de colores Gutenberg
    add_theme_support( 'editor-color-palette', array(
      array(
        'name' => __( 'strong magenta', 'esfera' ),
        'slug' => 'strong-magenta',
        'color' => '#a156b4',
      ),
      array(
        'name' => __( 'light grayish magenta', 'esfera' ),
        'slug' => 'light-grayish-magenta',
        'color' => '#d0a5db',
      ),
      array(
        'name' => __( 'very light gray', 'esfera' ),
        'slug' => 'very-light-gray',
        'color' => '#eee',
      ),
      array(
        'name' => __( 'very dark gray', 'esfera' ),
        'slug' => 'very-dark-gray',
        'color' => '#444',
      ),
    ));

    //Deshabilita colores personalizados
    add_theme_support( 'disable-custom-colors' );

    //Habilita alineación de imágenes
    add_theme_support( 'align-wide' );

    //Soporte a títulos dinámicos de páginas del sitio (para el SEO)
    add_theme_support('title-tag');

    //Soporte para que añada meta que permite interactuar con lectores RSS
    add_theme_support('automatic-feed-links');

    // Remueve meta etiqueta que muestra la versión de wordpress que usamos
    remove_action('wp_head', 'wp_generator');
  }
endif;
add_action('after_setup_theme', 'esfera_setup');

// Estilos para el editor gutenberg
if(!function_exists('esfera_editor_styles')):
  function esfera_editor_styles() {
    wp_enqueue_style('editor-style', get_theme_file_uri('/css/editor-style.css'), false, '1.0.0', 'all');
  }
endif;
add_action( 'enqueue_block_editor_assets', 'esfera_editor_styles');

// Soportes adicionales
require_once get_template_directory() . '/inc/custom-header.php';
require_once get_template_directory() . '/inc/custom-excerpt.php';
require_once get_template_directory() . '/inc/custom-description.php';

