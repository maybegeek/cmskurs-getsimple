<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:     template.php
* @Package:  GetSimple
* @Action:   UnserTheme ist ein Beispiel-Theme für GetSimple
*
*****************************************************/
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- Site Title -->
  <title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php get_header(); ?>
  <meta name="robots" content="index, follow">
  <link rel="stylesheet" href="https://rawcdn.githack.com/maybegeek/neogridic/master/neogridic.min.css">
  <link rel="stylesheet" href="<?php get_theme_url(); ?>/style.css">
</head>
<body id="<?php get_page_slug(); ?>" >

  <header>
    <h1><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></h1>
  </header>

  <nav>
    <ul>
      <?php get_navigation(return_page_slug()); ?>
    </ul>
  </nav>

  <main>
    <div class="page-content">
      <h2><?php get_page_title(); ?></h2>
      <?php get_page_content(); ?>
      <p class="page-meta"><time datetime="<?php get_page_date('c'); ?>"><?php get_page_date('j. F Y'); ?></time></p>
    </div>
    <aside>
      <?php get_component('sidebar');  ?>
    </aside>
  </main>

  <?php get_footer(); ?>
</body>
</html>
