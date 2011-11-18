<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" >
  <head>
    <?php print $head ?>
    <?php print $styles ?>
  <!--[if lt IE 7]>
    <style type="text/css" media="all"><?php print $styles_ie6 ?></style>
    <![endif]-->
    <title><?php print $head_title ?></title>
  </head>
  <body <?php print drupal_attributes($attr) ?>>

  <?php print !empty($admin) ? $admin : '' ?>

  <?php if ($show_messages && $messages): ?>
    <div id='growl'><?php print $messages; ?></div>
  <?php endif; ?>

<div id="header-image"></div>
  <div id='root'>
  <?php if ($logo) { ?><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php } ?>
   
     <?php if (!empty($left)): ?>
    <div id='sidebarleft'><div class='sidebar-left-wrapper clear-block'><?php print $left ?></div></div>
  <?php endif; ?>
  <?php if (!empty($right)): ?>
    <div id='sidebar'><div class='sidebar-wrapper clear-block'><?php print $right ?></div></div>
  <?php endif; ?>

  <div id='main'><div class='limiter'>
  
    <div id='navmenu' class='clear-block'><?php print $navmenu ?></div>
    <?php if ($site_name): ?><h1 class='site-name'><?php print $site_name ?></h1><?php endif; ?>

  <div id='page'>
    <?php if ($title || $tabs): ?>
    <div class='page-header'>
      <?php if ($title): ?><h2 class='page-title'><?php print $title ?></h2><?php endif; ?>
      <?php if ($tabs) print $tabs ?>
      <?php if ($tabs2) print $tabs2 ?>
    </div> <!-- psge header close-->
    <?php endif; ?>

    <div id='content' class='clear-block'><?php print $content ?></div> <!-- content close-->
  </div> <!-- page close-->

  <div id="footer" class='clear-block'>
    <?php print $feed_icons ?>
    <?php print $footer ?>
    <?php print $footer_message ?>
  </div> <!-- footer close-->
  
  </div> <!-- limiter close-->
  </div> <!-- main close-->

  </div> <!--root close-->

  <?php print $scripts ?>
  <?php print $closure ?>

  </body>
</html>