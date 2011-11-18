<?php
// $Id: views_showcase_plugin_row_showcasefields.inc,v 1.1 2009/06/06 22:14:10 rfsbsb Exp $ 
/**
 * @file
 * Contains the base row style plugin.
 */

/**
 * The basic 'fields' row plugin
 *
 * This displays fields one after another, giving options for inline
 * or not.
 *
 * @ingroup views_row_plugins
 */
class views_showcase_plugin_row_showcasefields extends views_plugin_row {
  function option_definition() {
    $options = parent::option_definition();
    $options['thumbnail_field'] = array('default' => '');
    $options['teaser_field'] = array('default' => '');
    $options['title_field'] = array('default' => '');
    return $options;
  }
  
  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);
  
    // Pre-build all of our option lists for the dials and switches that follow.
    $fields = array('' => t('<None>'));
    foreach ($this->display->handler->get_handlers('field') as $field => $handler) {
      if ($label = $handler->label()) {
        $fields[$field] = $label;
      }
      else {
        $fields[$field] = $handler->ui_name();
      }
    }
    $form['title_field'] = array(
      '#type' => 'select',
      '#title' => t('Title field'),
      '#options' => $fields,
      '#default_value' => $this->options['title_field'],
      '#description' => t('Select the field that will be used as the title field, if one is required.'),
    );
    
    $form['thumbnail_field'] = array(
      '#type' => 'select',
      '#title' => t('Thumbnail field'),
      '#options' => $fields,
      '#default_value' => $this->options['thumbnail_field'],
      '#description' => t('Select the field that will be used as the thumbnail field, if one is required.'),
    );
    
    $form['teaser_field'] = array(
      '#type' => 'select',
      '#title' => t('Teaser field'),
      '#options' => $fields,
      '#default_value' => $this->options['teaser_field'],
      '#description' => t('Select the field that will be used as the teaser field, if one is required.'),
    );
    

  }
}
