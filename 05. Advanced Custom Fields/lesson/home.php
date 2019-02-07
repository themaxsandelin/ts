<?php get_header(); ?>

<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post(); ?>
    <div class="post">
      <a href="<?php the_permalink(); ?>">
        <h3><?php the_title(); ?></h3>
      </a>
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>