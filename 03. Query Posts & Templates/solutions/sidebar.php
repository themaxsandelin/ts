<?php
  $categories = get_categories();
?>
<aside>
  <h4>Search</h4>
  <form method="GET" action="<?= $GLOBALS['requestUri']; ?>">
    <input type="search" name="search" id="search" placeholder="Search for something..." value="<?= $_GET['search']; ?>">
    <input type="submit" value="Search">
  </form>

  <h4>Categories</h4>
  <ul>
    <?php foreach ($categories as $cat): ?>
      <li>
        <a href="<?= ($GLOBALS['requestUri'] ? $GLOBALS['requestUri'] . '&' : '?'); ?>category=<?= $cat->name; ?>"><?= $cat->name; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>

  <h4>About me</h4>
  <p>aojdsfakposdjpasjdijasoidjas djaoisdja ijsdojas dioasjdoi jaosjd</p>
</aside>
