<?php  


/**
 * Crear nuestros menús gestionables desde el
 * administrador de Wordpress.
 */

function mis_menus() {
	register_nav_menus(
	    array(
	      'navegation' => __( 'Menú de navegación' ),
	      'menu-right' => __( 'Menú Derecho' ),
	      'menu-left' => __( 'Menú Izquierdo' ),
	    )
	);
}
add_action( 'init', 'mis_menus' );


function register_my_menus() {
	register_nav_menus(
	    array(
	      'header-menu' => __( 'Header Menu' ),
	      'extra-menu' => __( 'Extra Menu' ),
	      'redes-sociales' => __( 'Redes Sociales' )
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


// agregando clases a los enlaces etiqueta a 

function add_menuclass($ulclass, $args) {

	$classhref = 'e';

	if ('menu-right' === $args->theme_location) {
        $classhref = 'scroll';
        
    }
    if ('menu-left' === $args->theme_location) {
        $classhref = 'scroll';
        
    }


   	return preg_replace('/<a /', '<a class="'.$classhref.'"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass',1,3);



// agregando clases a los elementos li del menu

function add_classes_on_li($classes, $item, $args) {

	if ('navegation' === $args->theme_location) {
        $classes[] = 'test_class';
    }
	
	return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);



add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}








