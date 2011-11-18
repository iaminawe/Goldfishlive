<?php
// $Id: views-showcase-view.tpl.php,v 1.3 2010/04/29 15:20:40 khaledzaidan Exp $ 
/**
 * @file
 *  Views Showcase theme wrapper.
 *
 * @ingroup views_templates
 */
drupal_add_js(drupal_get_path('module', 'views_showcase') .'/js/jquery.cycle.min.js');
drupal_add_js(drupal_get_path('module', 'views_showcase') .'/js/jquery.easing.1.3.js');
drupal_add_js(drupal_get_path('module', 'views_showcase') .'/js/views_showcase.js');
drupal_add_css(drupal_get_path('module', 'views_showcase') .'/skins/'.$skin);
?>
<div class="item-list views-showcase clear-block"> 
  <div class="views-showcase-big-panel">
    <ul>
      <?php foreach ($rows as $row): ?>
      <li class="views-showcase-item">
        <?php print $row?>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <div class="views-showcase-mini-list">
    <div class="<?php print $views_showcase_id ?>">
      <?php foreach ($rows as $row): ?>
      <div class="views-showcase-pager-item">
        <?php print $row?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
</div>
