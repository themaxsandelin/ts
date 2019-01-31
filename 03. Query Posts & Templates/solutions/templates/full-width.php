<?php
/*
  Template Name: Full-width Layout
*/

$pageNumber = isset($_GET['pageNumber']) ? intval($_GET['pageNumber']) : 1;
$postsPerPage = 7;
$postCount = count(get_posts([ 'posts_per_page' => -1 ]));
$pageCount = ceil($postCount / $postsPerPage);

$posts = get_posts([
  'posts_per_page' => $postsPerPage,
  'offset' => (($pageNumber - 1) * $postsPerPage)
]);

$categories = get_categories();

get_header();
the_post();
?>

<section>

  <?php foreach ($posts as $post): ?>
    <a href="<?= get_permalink($post); ?>" class="post">
      <h4><?= $post->post_title; ?></h4>
    </a>
  <?php endforeach; ?>

  <ul>
    <?php for ($i = 1; $i <= $pageCount; $i++): ?>
      <li>
        <a href="?pageNumber=<?= $i; ?>">
          <?= $i; ?>
        </a>
      </li>
    <?php endfor; ?>
  </ul>
</section>

<?php get_footer(); ?>
