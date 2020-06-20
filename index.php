<?php get_template_part('template-parts/header'); ?>
<section id="content">
  <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        the_title( '<h1>', '</h1>' );
        the_content();
      endwhile;
    endif;
  ?>
</section>
<?php get_template_part('template-parts/footer'); ?>
