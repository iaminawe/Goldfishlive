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

  <div id='main-radio'><div class='limiter-radio'>

  <div id='page-radio'>
    <?php if ($title || $tabs): ?>
    <div class='page-header2'>
      <?php if ($title): ?><h4 class='page-title2'><?php print $title ?></h4><?php endif; ?>
    </div> <!-- psge header close-->
    <?php endif; ?>

    <div id='content' class='clear-block'><?php print $content ?></div> <!-- content close-->
  </div> <!-- page close-->
    
  </div> <!-- limiter close-->
  </div> <!-- main close-->

  </div> <!--root close-->

  <?php print $scripts ?>
  <?php print $closure ?>

  </body>
</html>