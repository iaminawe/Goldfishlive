<?php
// $Id: views_showcase_style_plugin.inc,v 1.3 2010/04/29 15:20:40 khaledzaidan Exp $
/**
 * @file
 *  Provide the views showcase plugin object with default options and form.
 */

/**
  * Implementation of views_plugin_style().
  */
class views_showcase_style_plugin extends views_plugin_style {

  function option_definition() {
    $options = parent::option_definition();
    unset($options['grouping']);
    $options['cycle']     = array('default'=> 'scrollRight');
    $options['timeout']   = array('default'=> '4000');
    $options['sync']      = array('default'=> 'true');
    $options['pause']     = array('default'=> 'false');
    $options['listpause'] = array('default'=> 'false');
    $options['easing']    = array('default'=> 'easeOutBounce');
    $options['skin']      = array('default'=> 'right');
    return $options;
  }

  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);
    unset($form['grouping']);

    $form['skin'] = array(
      '#type' => 'select',
      '#title' => t('Skin'),
      '#default_value' => $this->options['skin'],
      '#options' => array('right' => t('Right'), 'left' => t('Left')),
    );
    $form['timeout'] = array(
      '#type' => 'textfield',
      '#title' => t('Timeout'),
      '#default_value' => $this->options['timeout'],
      '#description' => t('The timeout between each slide. In miliseconds.'),
    );
    $form['cycle'] = array(
      '#type' => 'select',
      '#title' => t('Cycle Plugin Effect'),
      '#description' => t('Choose the desired cycle plugin effect.'),
      '#default_value' => $this->options['cycle'],
      '#options' => $this->get_cycle_options(),
    );
    $form['sync'] = array(
      '#type' => 'select',
      '#title' => t('Sync setting'),
      '#description' => t('Choose if the sycle effect will be synchronized or not.'),
      '#default_value' => $this->options['sync'],
      '#options' => array('true'=>t('Yes'), 'false' => t('No') ),
    );
    $form['pause'] = array(
      '#type' => 'select',
      '#title' => t('Pause on hover the slide'),
      '#description' => t('Choose if the transition stops when the mouse is over the slide.'),
      '#default_value' => $this->options['pause'],
      '#options' => array('true'=>t('Yes'), 'false' => t('No') ),
    );
    $form['listpause'] = array(
      '#type' => 'select',
      '#title' => t('Pause on hover the list'),
      '#description' => t('Choose if the transition stops when the mouse is over the slide title (in the navigation list).'),
      '#default_value' => $this->options['listpause'],
      '#options' => array('true'=>t('Yes'), 'false' => t('No') ),
    );
    $form['easing'] = array(
      '#type' => 'select',
      '#title' => t('Easing Plugin Effec'),
      '#description' => t('Choose the desired easing plugin effect.'),
      '#default_value' => $this->options['easing'],
      '#options' => $this->get_easing_options(),
    );
  }

  function get_cycle_options(){
    return array(
      'all' => t('Random'),
      'blindX' => 'blindX',
      'blindY' => 'blindY',
      'blindZ' => 'blindZ',
      'cover' => 'cover',
      'curtainX' => 'curtainX',
      'curtainY' => 'curtainY',
      'fade' => 'fade',
      'fadeZoom' => 'fadeZoom',
      'growX' => 'growX',
      'growY' => 'growY',
      'scrollUp' => 'scrollUp',
      'scrollDown' => 'scrollDown',
      'scrollLeft' => 'scrollLeft',
      'scrollRight' => 'scrollRight',
      'scrollHorz' => 'scrollHorz',
      'scrollVert' => 'scrollVert',
      'shuffle' => 'shuffle',
      'slideX' => 'slideX',
      'slideY' => 'slideY',
      'toss' => 'toss',
      'turnUp' => 'turnUp',
      'turnDown' => 'turnDown',
      'turnLeft' => 'turnLeft',
      'turnRight' => 'turnRight',
      'uncover' => 'uncover',
      'wipe' => 'wipe',
      'zoom' => 'zoom'
    );
  }

  function get_easing_options(){
    return array(
      "" => t('None'),
      "jswing" => "jswing",
      "easeInQuad" => "easeInQuad",
      "easeOutQuad" => "easeOutQuad",
      "easeInOutQuad" => "easeInOutQuad",
      "easeInCubic" => "easeInCubic",
      "easeOutCubic" => "easeOutCubic",
      "easeInOutCubic" => "easeInOutCubic",
      "easeInQuart" => "easeInQuart",
      "easeOutQuart" => "easeOutQuart",
      "easeInOutQuart" => "easeInOutQuart",
      "easeInQuint" => "easeInQuint",
      "easeOutQuint" => "easeOutQuint",
      "easeInOutQuint" => "easeInOutQuint",
      "easeInSine" => "easeInSine",
      "easeOutSine" => "easeOutSine",
      "easeInOutSine" => "easeInOutSine",
      "easeInExpo" => "easeInExpo",
      "easeOutExpo" => "easeOutExpo",
      "easeInOutExpo" => "easeInOutExpo",
      "easeInCirc" => "easeInCirc",
      "easeOutCirc" => "easeOutCirc",
      "easeInOutCirc" => "easeInOutCirc",
      "easeInElastic" => "easeInElastic",
      "easeOutElastic" => "easeOutElastic",
      "easeInOutElastic" => "easeInOutElastic",
      "easeInBack" => "easeInBack",
      "easeOutBack" => "easeOutBack",
      "easeInOutBack" => "easeInOutBack",
      "easeInBounce" => "easeInBounce",
      "easeOutBounce" => "easeOutBounce",
      "easeInOutBounce" => "easeInOutBounce"
    );
  }
}
