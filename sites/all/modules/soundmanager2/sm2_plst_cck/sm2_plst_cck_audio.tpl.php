<?php
//$Id: sm2_plst_cck_audio.tpl.php,v 1.1.2.4 2009/12/15 14:53:32 davebv Exp $
?>

<?php // Add required js 
require_once(drupal_get_path('module', 'soundmanager2') .'/players/page-player.inc');
?>

<div class="sm2_plst_cck-outer">
  
  <div>
    <ul class="playlist">
      <?php
        // The argument is passed even if the field is empty
        if (isset($element[0]['#item']['nid'])) :
        ?>
      <?php // Get the children
        $children = element_children($element);
        // Cycle through the file elements
        foreach ($children as $key) {
          $nid = $element[$key]['#item']['nid'];
          $content = node_load($nid);
      ?>
          <li>
          <? php
            //  $content->url_play .'/'. $content->audio['file']->filename ; // For make it playAdd this so that it sees an mp3 file 
            //  url($content->audio['file']->filepath) ; // regular file
          ?>
            <!-- For make it play, Add this so that it sees an mp3 file -->
            <a href="<?php print $content->url_play .'/'. $content->audio['file']->filename ;?>">
              <?php print ($content->audio_tags['title'] ? $content->audio_tags['title'] : $content->audio['file']->filename ) ;?>
            </a>
            <div class="sm2-filelink">
              <a href="<?php print url(drupal_get_path_alias('node/'. $nid)) ;?>">+info</a>
            </div>
          </li>
      <?php } ?>
      <?php endif;?>
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
