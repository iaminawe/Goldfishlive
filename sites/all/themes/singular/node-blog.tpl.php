<?php
// $Id: node.tpl.php,v 1.1.2.2 2009/11/11 05:26:25 sociotech Exp $
?>

<div id="node-<?php print $node->nid; ?>" class="node <?php print $node_classes; ?>">

<!-- For the blog teaser -->
<?php if ($teaser): ?>
  <div class="inner">
<div class="blogteaser">
  
<h2 class="title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  
  <div class="blogteaserleadimage">
  <a href="<?php print $node_url ?>">
<?php print theme('imagecache', 'blogthumb', $node->field_headerimages[0]['filepath'], $alt, $title, $attributes); ?>
</a>

</div>

<div class="calendarwrap">
<div class="daywrap"><?php print format_date($created, 'custom', 'd'); ?></div>
<div class="monthwrap"><?php print format_date($created, 'custom', 'M'); ?></div>
<div class="yearwrap"><?php print format_date($created, 'custom', 'Y'); ?></div>
  </div>

 <?php print($node->teaser);?>
</div> <!-- blogteaser close-->
 
  <?php endif;?>
  
  <!-- For the main blog post -->
  
<?php if (!$teaser): ?>
  <div class="inner">
 
    <h2 class="title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  
    <div id="node-top" class="node-top row nested">
     
    </div><!-- /node-top -->

    <div class="content clearfix">
      <?php print $content ?>
          <?php
print $node->content['tweetbutton']['#children']; 
?>
    </div>

   <?php endif; ?>

  </div><!-- /inner -->

  <?php if ($node_bottom && !$teaser): ?>
  <div id="node-bottom" class="node-bottom row nested">
    <div id="node-bottom-inner" class="node-bottom-inner inner">
      <?php print $node_bottom; ?>
    </div><!-- /node-bottom-inner -->
  </div><!-- /node-bottom -->
  <?php endif; ?>
</div><!-- /node-<?php print $node->nid; ?> -->
