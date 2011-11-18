<?php
//$Id: sm2_plst_cck_ff.tpl.php,v 1.1.2.6 2010/01/10 10:29:33 davebv Exp $
?>

<?php // Add required js 
require_once(drupal_get_path('module', 'soundmanager2') .'/players/page-player.inc');
?>

<div class="sm2_plst_cck-outer">
  
  <div>
    <ul class="playlist">
      <?php  // Initialise an array for results
      //$files = array();
      // Get the children
      $children = element_children($element);
      // Cycle through the file elements
      foreach ($children as $key) {
        // If nothing has been uploaded then there are items, but they are empty, so check they are set
        if (isset($element[$key]['#item']['filepath'])) {
      ?>
        <li>
          <a href="<?php print base_path() . $element[$key]['#item']['filepath'] ;?>">
            <?php print ($element[$key]['#item']['data']['description'] ? $element[$key]['#item']['data']['description'] : $element[$key]['#item']['filename'] ) ;?>
          </a>
          <div class="sm2-filelink">
            <a class="exclude" href="<?php print base_path() . $element[$key]['#item']['filepath'] ;?>">+Download</a>
          </div>
        </li>
      <?php
        }
      }
      ?>
    </ul>
    <div id="control-template">
      <!-- control markup inserted dynamically after each link -->
      <div class="controls">
        <div class="statusbar">
          <div class="loading"></div>
          <div class="position"></div>
        </div>
      </div>
      <div class="timing">
        <div id="sm2_timing" class="timing-data">
          <span class="sm2_position">%s1</span> / <span class="sm2_total">%s2</span></div>
        </div>
        <div class="peak">
          <div class="peak-box">
            <span class="l"></span>
            <span class="r"></span>
          </div>
        </div>
      </div>
    
      <div id="spectrum-container" class="spectrum-container">
        <div class="spectrum-box">
          <div class="spectrum"></div>
        </div>
      </div> 
    
  </div>
</div>
