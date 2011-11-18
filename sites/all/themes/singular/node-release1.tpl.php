<!--
Doomed's own ubercart product template: this one should look very similar to the 'default look'.
It has only few selected fields and comes with Lightbox support.
Created with the help of many people on the forums of Ubercart.org .
Last update: 21/nov/2008
-->
<?php // Grabs the firsts image path and sets $imagePath.
$imagePath = $node->field_image_cache['0']['filepath'];
?>

<!-- node and node inner -->
<div class="node <?php print $node_classes ?>" id="node-<?php print $node->nid; ?>">
<div class="node-inner">

<!-- show categories, etc. -->
<?php if ($unpublished || $submitted || count($taxonomy)): ?>
<div class="node-top">
  <?php if ($unpublished) : ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <?php if ($submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>  
  
  <?php if (count($taxonomy)): ?>
    <div class="taxonomy"><?php print t(' Categorias: ') . $terms; ?></div>
  <?php endif; ?> 
</div> 
<?php endif; ?>
<!-- /show categories, etc. -->

<!--show default image first, then others-->
<div class="product_image">
<?php $imagePath = $node->field_image_cache['0']['filepath']; ?>

<?php if (!$node->field_image_cache == NULL) { ?>
<a href="<?=base_path()?><?=$imagePath?>" rel="lightbox[prod]">
<img src="<?=base_path()?>files/imagecache/product/<?=$imagePath?>" alt="<?=$title?>" title="<?=$title?>" class="imagecache imagecache-product">
</a>
<?php } ?>

<?php if (count($node->field_image_cache) > 1) { ?>
<ul class="other_imgs" style="list-style-type:none; margin-top:10px; text-align:center;">
<?php foreach ($node->field_image_cache as $images) { if ($images['filepath'] != $imagePath) { ?>
   <li style="display:inline; padding:0; margin-left:0;">
     <a href="<?=base_path()?><?=$images['filepath']?>" rel="lightbox[prod]" title="<?=$title?>">
     <img src="<?=base_path()?>files/imagecache/uc_thumbnail/<?=$images['filename']?>" alt="<?=$title?>" class="imagecache imagecache-uc_thumbnail">
     </a>
   </li>
<?php } } ?>
</ul>
<?php } ?>
</div>
<!--/show default image first, then others-->

<!--show fields: sku, description, prices-->
<?php //print $title ?>
<div class="model"><?php print $node->model ?></div>
<p><?php print $node->content['body']['#value'];  ?></p>
<div class="sell_price">Pre̤o: <?php print uc_currency_format($node->sell_price); ?></div>
<div class="display_price"><?php print uc_currency_format($node->sell_price); ?></div>
<!--/show fields: sku, description, prices-->

<!--show add to cart button-->


<div class="add_to_cart">
<?php print $node->content['add_to_cart']["#value"]; ?>
</div>

<!--/show add to cart button-->

<!--wish i knew-->
  <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>
<!--/wish i knew-->

</div>
</div>
<!-- /node and node inner -->