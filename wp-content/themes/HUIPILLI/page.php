<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
<section>
  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
</section>
<?php endif; ?>

<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>