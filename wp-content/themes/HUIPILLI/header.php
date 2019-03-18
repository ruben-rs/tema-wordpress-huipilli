<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; />
	<meta name="keywords" content="" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<!---- tabs---->
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/easy-responsive-tabs.css" />
	<script src="<?php echo get_template_directory_uri(); ?>/js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
	    $(document).ready(function () {
	        $('#horizontalTab').easyResponsiveTabs({
	            type: 'default', //Types: default, vertical, accordion           
	            width: 'auto', //auto or any width like 600px
	            fit: true,   // 100% fit in a container
	            closed: 'accordion', // Start closed if in accordion view
	            activate: function(event) { // Callback function if tab is switched
	                var $tab = $(this);
	                var $info = $('#tabInfo');
	                var $name = $('span', $info);
	                $name.text($tab.text());
	                $info.show();
	            }
	        });

	        $('#verticalTab').easyResponsiveTabs({
	            type: 'vertical',
	            width: 'auto',
	            fit: true
	        });
	    });
	</script>
	<!---- tabs---->
	<?php wp_head(); ?>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="header-left">
				
				<?php 
		        	wp_nav_menu(
		        		array(
		        			'theme_location' => 'menu-left',
		        			'container_class' => 'top-menu',
		        			'items_wrap' => '<ul>%3$s</ul>',
		        		)
		        	); 
		        ?>			 
				
			</div>
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="header-right">
				<?php 
		        	wp_nav_menu(
		        		array(
		        			'theme_location' => 'menu-right',
		        			'container_class' => 'top-menu',
		        			'items_wrap' => '<ul>%3$s</ul>',
		        		)
		        	); 
		        ?>		 
				
			</div>
			<div class="clearfix"></div>
		</div>
	</div>


 	<nav>
      <ul class="main-nav">
        <?php 
        	wp_nav_menu(
        		array(
        			'theme_location' => 'redes-sociales',
        			'container_class'   => ""
        		)
        	); 
        ?>
      </ul>
    </nav>



