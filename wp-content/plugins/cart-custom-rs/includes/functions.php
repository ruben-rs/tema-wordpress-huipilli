<?php 



function rai_nuevos_botones($botones) 
 { 
 $botones[] = 'fontselect';
 $botones[] = 'fontsizeselect';
 $botones[] = 'underline';
 return $botones;
}
add_filter( 'mce_buttons_3','rai_nuevos_botones');



function add_myCartelm()
{
	$cartEl= '<script>
				var node = document.createElement("div");
				node.classList.add("cart-rs");
				document.getElementsByTagName("body")[0].appendChild(node)
	         </script>';

	echo  $cartEl;
}
add_action('wp_footer', 'add_myCartelm', 10, 1);
/**
* Crea shortcode [Customcart]
* [Customcart urlpcart="" classcart="#ff6c00"]texto[/Customcart]
*/
function custom_cart_shortcode($atts, $content = null) {
	$cart_atts = shortcode_atts(array(
		'urlpcart' => '',
		'urlimgcart' => '',
		'classcart' => ''
	), $atts );

	$linkCarrito = '"><img class="tm-cart-rs" src="'.$cart_atts['urlimgcart'].'"><span class="header-cart-count ic-cart">'.$content.' '.WC()->cart->get_cart_contents_count().'</span></a>';
	

	$scriptCarrito = '<script>
						var menuCart = document.getElementsByClassName("'.$cart_atts['classcart'].'");

						var classa = menuCart[0].children[0].classList.value;


						menuCart[0].innerHTML='."'".'<a class="'."'+classa+'".'" href="'.$cart_atts['urlpcart'].$linkCarrito."'".';

						

					  </script>';

	$script = '<script>
						var menu = document.getElementsByClassName("cart-rs");

						menu[0].ininnerHTML='."'".$scriptCarrito."'".';

						

					  </script>';


	
	return $scriptCarrito;
}

add_shortcode('Customcart', 'custom_cart_shortcode');







?>