<?php
/*
  Template Name: Right Sidebar Layout
*/

$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : 'date';
$search = isset($_GET['search']) ? $_GET['search'] : '';

$postArgs = [
  'posts_per_page' => -1,
  'orderby' => $orderby,
  's' => $search
];

$category = isset($_GET['category']) ? $_GET['category'] : '';
if ($category) $postArgs['category_name'] = $category;

$pageNumber = isset($_GET['pageNumber']) ? intval($_GET['pageNumber']) : 1;
$postsPerPage = isset($_GET['postsperpage']) ? intval($_GET['postsperpage']) : 5;
$postCount = count(get_posts($postArgs));
$pageCount = ceil($postCount / $postsPerPage);

$postArgs['posts_per_page'] = $postsPerPage;
$postArgs['offset'] = (($pageNumber - 1) * $postsPerPage);
$posts = get_posts($postArgs);

$GLOBALS['requestUri'] = '';
foreach ($_GET as $key => $value) {
  if ($key !== 'pageNumber' && $key !== 'category') {
    $GLOBALS['requestUri'] .= $GLOBALS['requestUri'] ? '&' : '?';
    $GLOBALS['requestUri'] .= $key . '=' . $value;
  }
}

get_header();
the_post();
?>

<section>
  <form method="GET" action="<?= $GLOBALS['requestUri']; ?>">
    <label for="orderby">Order posts by:</label>
    <select name="orderby" id="orderby">
      <option value="date">Date</option>
      <option value="title" <?php if ($orderby === 'title') echo 'selected'; ?>>Title</option>
      <option value="ID">ID</option>
    </select>
    <label for="postsperpage">Posts per page:</label>
    <select name="postsperpage" id="postsperpage">
      <option>5</option>
      <option <?php if ($postsPerPage === 10) echo 'selected'; ?>>10</option>
      <option <?php if ($postsPerPage === 15) echo 'selected'; ?>>15</option>
    </select>
    <input type="submit" value="Filter">
  </form>

  <?php foreach ($posts as $post): ?>
    <a href="<?= get_permalink($post); ?>" class="post">
      <h4><?= $post->post_title; ?></h4>
    </a>
  <?php endforeach; ?>

  <?php if ($pageCount > 1): ?>
    <ul>
      <?php for ($i = 1; $i <= $pageCount; $i++): ?>
        <li>
          <a href="<?= ($GLOBALS['requestUri'] ? $GLOBALS['requestUri'] . '&' : '?'); ?>pageNumber=<?= $i; ?>">
            <?= $i; ?>
          </a>
        </li>
      <?php endfor; ?>
    </ul>
  <?php endif; ?>
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
