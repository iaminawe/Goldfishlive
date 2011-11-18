<?php
// $Id: ui360.inc,v 1.1.2.2 2010/01/09 18:18:58 davebv Exp $


// Include required files for ui360 player
  //drupal_add_css(drupal_get_path('module', 'soundmanager2') . '/players/ui360/360player.css');
  drupal_add_css(variable_get('sm2-path', 'sites/all/libraries/soundmanager2') .'/demo/360-player/360player.css');
  //drupal_add_css(drupal_get_path('module', 'soundmanager2') . '/players/ui360/360player-visualization.css');
  drupal_add_css(variable_get('sm2-path', 'sites/all/libraries/soundmanager2') .'/demo/360-player/360player-visualization.css');
  //drupal_add_js(drupal_get_path('module', 'soundmanager2') . '/players/ui360/excanvas.js');
  drupal_add_js(variable_get('sm2-path', 'sites/all/libraries/soundmanager2') .'/demo/360-player/script/excanvas.js');
  //drupal_add_js(drupal_get_path('module', 'soundmanager2') . '/players/ui360/berniecode-animator.js');
  drupal_add_js(variable_get('sm2-path', 'sites/all/libraries/soundmanager2') .'/demo/360-player/script/berniecode-animator.js');
  //drupal_add_js(drupal_get_path('module', 'soundmanager2') . '/players/ui360/360player.js');
  drupal_add_js(variable_get('sm2-path', 'sites/all/libraries/soundmanager2') .'/demo/360-player/script/360player.js');
  //drupal_add_js('var sm2_imageRoot_360 = \''. base_path() . drupal_get_path('module', 'soundmanager2') .'/players/ui360/' .'\' ;', 'inline');
  drupal_add_js('var sm2_imageRoot_360 = \''. base_path() . variable_get('sm2-path', 'sites/all/libraries/soundmanager2') .'/demo/360-player/' .'\' ;', 'inline');
  drupal_add_js(  
    "var sm2_audio_waveform = ". (variable_get('sm2_audio_waveform', true) ? 'true' : 'false') ." ; ".
    "var sm2_audio_eq = ". (variable_get('sm2_audio_eq', true) ? 'true' : 'false') ." ; ".
    "var sm2_audio_amplifier = ". (variable_get('sm2_audio_amplifier', true) ? 'true' : 'false') ." ; "//.
    , 'inline');
//      "var sm2_audio_waveform_thickness = ". variable_get('sm2_audio_waveform_thickness', '50') ." ;".
//      "var sm2_audio_wave_downsample = ". variable_get('sm2_audio_wave_downsample','4') ." ;".
//      "var sm2_audio_eq_thickness = ". variable_get('sm2_audio_eq_thickness', '20') ." ;".
//      "var sm2_audio_eq_downsample = ". variable_get('sm2_audio_eq_downsample', '5') ." ;".
//
//      "var sm2_audio_wf_position = ". (variable_get('sm2_audio_wf_position', 1) == 1) ? 'false' : 'true'  ." ;".
//      "var sm2_audio_eq_position = ". (variable_get('sm2_audio_eq_position', 2) == 1) ? 'false' : 'true' ." ;".
//      "var sm2_audio_wf_color = '". variable_get('sm2_audio_waveform_color', '#0099ff') ."' ;".
//      "var sm2_audio_eq_color = '". variable_get('sm2_audio_eq_color', '#339933') ."' ;".
//      "var sm2_audio_ld_color = '". variable_get('sm2_audio_loaded_color', '#ccc') ."' ;".  
//      "var sm2_audio_pg_color = '". variable_get('sm2_audio_progress_color', '#ff33ff') ."' ;".  
//      "var sm2_audio_bg_color = '". variable_get('sm2_audio_background_color', '#eee') ."' ;"

  drupal_add_js(drupal_get_path('module', 'soundmanager2') .'/players/ui360.js');


