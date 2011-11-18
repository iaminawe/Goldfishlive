<?php
// $Id: page-player.inc,v 1.1.2.2 2010/01/09 18:18:58 davebv Exp $

// Add module Styles
// Style modified for overriding styles
drupal_add_css(drupal_get_path('module', 'soundmanager2') .'/players/page-player/page-player.css');

// Add modules scripts
//drupal_add_js(drupal_get_path('module', 'soundmanager2') .'/players/page-player/page-player.js');
// Use script from the demo
drupal_add_js(variable_get('sm2-path', 'sites/all/libraries/soundmanager2') .'/demo/page-player/script/page-player.js');

