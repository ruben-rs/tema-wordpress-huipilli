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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; />
	<meta name="keywords" content="" />
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<!---- tabs---->
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" media="all" />
	
	<!---- tabs---->
	<?php wp_head(); ?>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-to">
	    <div class="container">
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	          <span class="sr-only">Toggle navigation</span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>
			<a class="leftrs-li" href=""></a>
	        <!-- <a class="navbar-brand" href="https://floreriayregalostere.com"><img class="logo" src="http://floreriayregalostere.com/wp-content/themes/Floreria/img/logo-tere.jpg"></a> -->
	      </div>
	      <div id="navbar" class="navbar-collapse collapse">
	        
	        <?php if (has_nav_menu( 'menu-left' ) ) : ?>	 
				<?php 
		        	wp_nav_menu(
		        		array(
		        			'theme_location' => 'menu-left',
		        			'container' => 'ul',
		        			'menu_class' => 'nav navbar-nav navbar-left',
		        		)
		        	); 
		        ?>			 
			<?php endif; ?>
			  
	        <ul class="nav navbar-nav ">
	        	<li><a class="center-li" href=""><?php get_sidebar('logo'); ?></a></li>
	        </ul>
	 
	        <?php if (has_nav_menu( 'menu-right' ) ) : ?>	 
				<?php 
		        	wp_nav_menu(
		        		array(
		        			'theme_location' => 'menu-right',
		        			'container' => 'ul',
		        			'menu_class' => 'nav navbar-nav navbar-right',
		        		)
		        	); 
		        ?>			 
			<?php endif; ?>
	      </div><!--/.nav-collapse -->
	    </div>
	</nav>




