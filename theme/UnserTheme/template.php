<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:     template.php
* @Package:  GetSimple
* @Action:   UnserTheme: default
*
*****************************************************/
?><?php include('tmpl-oben.inc.php'); ?>

  <main class="row">
    <div class="page-content c8">
      <h2><?php get_page_title(); ?></h2>
      <?php get_page_content(); ?>
      <p class="page-meta"><time datetime="<?php get_page_date('c'); ?>"><?php get_page_date('j. F Y'); ?></time></p>
    </div>
    <aside class="c4">
      <?php get_component('sidebar');  ?>
    </aside>
  </main>

<?php include('tmpl-unten.inc.php'); ?>
