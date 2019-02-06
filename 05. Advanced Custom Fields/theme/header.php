
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= get_bloginfo('name') . ' - ' . get_bloginfo('description'); ?></title>

    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">

    <?php wp_head(); ?>
  </head>
  <body>
    
    <header>
      <div class="meta">
        <a href="/">
          <h3><?= get_bloginfo('name'); ?></h3>
        </a>
        <p><?= get_bloginfo('description'); ?></p>
      </div>

      <?php wp_nav_menu('header'); ?>
    </header>
  