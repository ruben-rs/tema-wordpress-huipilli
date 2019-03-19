<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
  <section>
    
    <?php the_content(); ?>
  </section>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->

<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>