<?php
//$Id: sm2_plst_cck_audio_ui360.tpl.php,v 1.1.2.1 2009/12/15 14:53:32 davebv Exp $
?>

<?php // Add required js 
require_once(drupal_get_path('module', 'soundmanager2') .'/players/ui360.inc');
?>

<div class="sm2_plst_cck-outer">
  
  <div>
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
          <div class="ui360">
          <? php
            //  $content->url_play .'/'. $content->audio['file']->filename ; // For make it playAdd this so that it sees an mp3 file 
            //  url($content->audio['file']->filepath) ; // regular file
          ?>
            <!-- For make it play, Add this so that it sees an mp3 file -->
            <a href="<?php print $content->url_play .'/'. $content->audio['file']->filename ;?>">
              <?php print ($content->audio_tags['title'] ? $content->audio_tags['title'] : $content->audio['file']->filename ) ;?>
            </a>
          </div>
      <?php } ?>
      <?php endif;?>
</div>
