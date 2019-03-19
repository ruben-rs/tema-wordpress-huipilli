<?php
/**
 * Show error messages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/notices/error.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! $messages ) {
	return;
}

?>
<ul class="woocommerce-error" role="alert">
	<?php foreach ( $messages as $message ) : ?>
		<li>
			<?php
				$msg = wc_kses_notice($message);
				$cambios = str_replace('Billing', '', $msg);
				$cambios = str_replace('is a required field', 'es un campo obligatorio', $cambios);
				$cambios = str_replace('Please enter an address to continue.', 'Por favor, introduzca una dirección para continuar.', $cambios);
				echo ($cambios);
			?>
		</li>
	<?php endforeach; ?>
</ul>
