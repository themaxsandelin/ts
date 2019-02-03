<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <?php wp_head(); ?>
  </head>
  <body>

    <header>
      <h4><?= get_bloginfo('name'); ?></h4>

      <?php
        wp_nav_menu([
          'theme_location' => 'header'
        ]);
      ?>
    </header>

    <div class="container">
