<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:     ohne-sidebar.php
* @Package:  GetSimple
* @Action:   UnserTheme: Template ohne sidebar/component, volle Breite
*
*****************************************************/
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php get_header(); ?>
  <meta name="robots" content="index, follow">
  <link rel="stylesheet" href="https://rawcdn.githack.com/maybegeek/neogridic/master/neogridic.min.css">
  <link rel="stylesheet" href="<?php get_theme_url(); ?>/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface|Average">
</head>
<body id="<?php get_page_slug(); ?>" class="grid w960">

  <header class="row">
    <h1 class="c12"><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></h1>
  </header>

  <nav class="row">
    <ul class="c12">
      <?php get_navigation(return_page_slug()); ?>
    </ul>
  </nav>

  <main class="row">
    <div class="page-content c12">
      <h2><?php get_page_title(); ?></h2>
      <?php get_page_content(); ?>
      <p class="page-meta"><time datetime="<?php get_page_date('c'); ?>"><?php get_page_date('j. F Y'); ?></time></p>
    </div>
  </main>

  <?php get_footer(); ?>
</body>
</html>
