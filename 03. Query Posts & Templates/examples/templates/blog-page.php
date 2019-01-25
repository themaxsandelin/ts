<?php
/**
 * Template Name: Sidebar layout
 */

function constructQuery($vars) {
  $str = '';
  foreach ($vars as $key => $value) {
    $str .= $str ? '&' : '?';
    $str .= "$key=$value";
  }
  return $str;
}

$pageNumber = isset($_GET['pageNumber']) ? $_GET['pageNumber'] : 1;
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

get_header();
the_post();

$postsPerPage = 5;
$args = [
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order' => 'DESC',
  's' => $searchTerm
];

$postCount = count(get_posts($args));
$pageCount = ceil($postCount / $postsPerPage);

$args['posts_per_page'] = $postsPerPage;
$args['offset'] = (($pageNumber - 1) * $postsPerPage);
$blogPosts = get_posts($args);

?>

<section>
  <?php the_content(); ?>
  <?php foreach ($blogPosts as $post): ?>
    <div class="post">
      <a href="<?= get_permalink($post); ?>">
        <h4><?= $post->post_title; ?></h4>
        <p><?= $post->post_content; ?></p>
      </a>
    </div>
  <?php endforeach; ?>
  <ul>
    <?php for ($i = 1; $i <= $pageCount; $i++): ?>
      <li>
        <a href="<?= constructQuery([ 'pageNumber' => $i, 'search' => $searchTerm ]); ?>">
          <?= $i; ?>
        </a>
      </li>
    <?php endfor; ?>
  </ul>
</section>

<?php get_sidebar(); ?>


<?php get_footer(); ?>
