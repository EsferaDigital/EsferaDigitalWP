<?php

// Para modificar el extracto
if(!function_exists('esfera_excerpt_more')):
  function esfera_excerpt_more() {
    return '<a href="' . get_permalink() . '">' . __(' leer más', 'esfera') . '<i class="fab fa-readme"></i></a>';
  }
endif;
add_filter( 'excerpt_more', 'esfera_excerpt_more' );

if(!function_exists('esfera_excerpt_length')):
  function esfera_excerpt_length() {
    return 40;
  }
endif;
add_filter( 'excerpt_length', 'esfera_excerpt_length' );
