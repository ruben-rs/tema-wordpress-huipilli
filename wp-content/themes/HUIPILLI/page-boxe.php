<?php 

/*

Template Name: Boxed Width

*/

?>
<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
<section>
  <div class="container">
  	<?php the_content(); ?>
  </div>
  
</section>
<?php endif; ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>