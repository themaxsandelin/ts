<?php
/*
  Template Name: Left Sidebar Layout
*/

$posts = get_posts();

get_header();
the_post();
?>

<?php get_sidebar(); ?>

<section>
  <?php foreach ($posts as $post): ?>
    <a href="<?= get_permalink($post); ?>" class="post">
      <h4><?= $post->post_title; ?></h4>
    </a>
  <?php endforeach; ?>
</section>

<?php get_footer(); ?>
