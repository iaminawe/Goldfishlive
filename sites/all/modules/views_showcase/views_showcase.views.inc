<?php
// $Id: views_showcase.views.inc,v 1.3 2010/04/29 15:20:40 khaledzaidan Exp $

/**
 * @file
 *  Provide the views showcase plugin definition.
 */

function views_showcase_views_plugins() {
  return array(
    'module' => 'views_showcase',
    'style' => array(
      'views_showcase' => array(
        'title' => t('Views Showcase'),
        'theme' => 'views_showcase_view',
        'help' => t('Display a view like a showcase.'),
        'handler' => 'views_showcase_style_plugin',
        'uses row plugin' => TRUE,
        'uses options' => TRUE,
        'type' => 'normal',
      ),
    ),
    'row' => array(
      'showcasefields' => array(
        'title' => t('Views Showcase'),
        'help' => t('Choose the fields to display in Showcase Style.'),
        'handler' => 'views_showcase_plugin_row_showcasefields',
        'theme' => 'views_showcase_view_showcasefields',
        'uses fields' => TRUE,
        'uses options' => TRUE,
        'type' => 'normal',
      ),
    ),
  );
}
