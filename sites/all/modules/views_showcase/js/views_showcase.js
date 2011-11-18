// $Id$ 
Drupal.behaviors.views_showcaseBehavior = function (context) {
  //change the active slide class name
  $.fn.cycle.updateActivePagerLink = function(pager, currSlideIndex) { 
      $(pager).find('.views-showcase-pager-item').removeClass('activeItem') 
          .filter('.views-showcase-pager-item:eq('+currSlideIndex+')').addClass('activeItem'); 
  };
  
  var sync      = Drupal.settings.views_showcase.sync      == "true" ? true : false;
  var listPause = Drupal.settings.views_showcase.listPause == "true" ? true : false;
  var pause     = Drupal.settings.views_showcase.pause     == "true" ? true : false;

  $('.views-showcase-big-panel ul').cycle({ 
    fx: Drupal.settings.views_showcase.cycle,
    easing: Drupal.settings.views_showcase.easing,
    sync: sync,
    pauseOnPagerHover: listPause,
    pause: pause,
    timeout: Drupal.settings.views_showcase.timeout,
    pager:  '.views-showcase-mini-list',
    pagerAnchorBuilder: function(idx, slide) { 
        // return selector string for existing anchor 
        return '.views-showcase-mini-list .views-showcase-pager-item:eq(' + idx + ')'; 
    }
  });
};
