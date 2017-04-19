<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:     sidebar-links-content-rechts.php
* @Package:  GetSimple
* @Action:   UnserTheme: sidebar links, content rechts
*
*****************************************************/
?><?php include('tmpl-oben.inc.php'); ?>

  <main class="row">
    <aside class="c4">
      <?php get_component('sidebar');  ?>
    </aside>
    <div class="page-content c8">
      <h2><?php get_page_title(); ?></h2>
      <?php get_page_content(); ?>
      <p class="page-meta"><time datetime="<?php get_page_date('c'); ?>"><?php get_page_date('j. F Y'); ?></time></p>
    </div>
  </main>

<?php include('tmpl-unten.inc.php'); ?>
