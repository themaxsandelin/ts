<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= get_bloginfo('name') . ' | ' . get_bloginfo('description'); ?></title>

    <?php wp_head(); ?>
  </head>
  <body>
    
    <header>
      <h4><?= get_bloginfo('name'); ?></h4>
      <p><?= get_bloginfo('description'); ?></p>
    </header>