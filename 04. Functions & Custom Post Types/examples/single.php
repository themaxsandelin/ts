<?php
get_header();
the_post();
?>

<section>
  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
</section>

<?php get_footer(); ?>
