<?php
//$Id: sm2_plst_cck_ff_ui360.tpl.php,v 1.1.2.1 2009/12/15 14:53:32 davebv Exp $
?>

<?php // Add required js 
require_once(drupal_get_path('module', 'soundmanager2') .'/players/ui360.inc');
?>

<div class="sm2_plst_cck-outer">
  
  <div>
      <?php  // Initialise an array for results
      //$files = array();
      // Get the children
      $children = element_children($element);
      // Cycle through the file elements
      foreach ($children as $key) {
        // If nothing has been uploaded then there are items, but they are empty, so check they are set
        if (isset($element[$key]['#item']['filepath'])) {
      ?>
        <div class="ui360">
          <a href="<?php print base_path() . $element[$key]['#item']['filepath'] ;?>">
            <?php print ($element[$key]['#item']['data']['description'] ? $element[$key]['#item']['data']['description'] : $element[$key]['#item']['filename'] ) ;?>
          </a>
        </div>
      <?php
        }
      }
      ?>
</div>
