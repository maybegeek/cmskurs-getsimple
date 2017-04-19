<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:     ohne-sidebar.php
* @Package:  GetSimple
* @Action:   UnserTheme: Template ohne sidebar/component, volle Breite
*
*****************************************************/
?><?php include('tmpl-oben.inc.php'); ?>

  <main class="row">
    <div class="page-content c12">
      <h2><?php get_page_title(); ?></h2>
      <?php get_page_content(); ?>
      <p class="page-meta"><time datetime="<?php get_page_date('c'); ?>"><?php get_page_date('j. F Y'); ?></time></p>
    </div>
  </main>

<?php include('tmpl-unten.inc.php'); ?>
