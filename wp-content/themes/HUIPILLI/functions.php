<?php  


/**
 * Crear nuestros menús gestionables desde el
 * administrador de Wordpress.
 */

function mis_menus() {
  register_nav_menus(
    array(
      'navegation' => __( 'Menú de navegación' ),
    )
  );
}
add_action( 'init', 'mis_menus' );


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



/**
 * Crear una zonan de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */

function mis_widgets(){
 register_sidebar(
   array(
       'name'          => __( 'Sidebar' ),
       'id'            => 'sidebar',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>',
   )
 );
}
add_action('init','mis_widgets');
