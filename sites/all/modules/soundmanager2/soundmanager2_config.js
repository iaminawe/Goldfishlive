//if (jQuery().soundmanager2) {
Drupal.behaviors.soundmanager2_bhv = function (context) {
  if ( typeof soundManager != "undefined" ) {
    //soundManager = new Object();
    soundManager.url = sm2_mod_url;
    //soundManager.debugMode = false;
    soundManager.debugMode = sm2_var_debug;
    soundManager.flashVersion = 9;
    soundManager.useMovieStar = true;
    soundManager.useHighPerformance = true; // position:fixed flash movie for faster JS/flash callbacks
    soundManager.wmode = 'transparent';
    
    soundManager.useFastPolling = true; // increased JS callback frequency, combined with useHighPerformance = true
  
    // pagePlayer.useWaveformData = true;
    // pagePlayer.useEQData = true;
    // pagePlayer.usePeakData = true;
    soundManager.flash9Options.useWaveformData = true;
    soundManager.flash9Options.useEQData = true;
    soundManager.flash9Options.usePeakData = true;
  
    //Add some behaviors (Example)
    //$("ul.playlist li:not(.sm2_playing), ul.playlist li:not(.sm2_playing) a.sm2_link,").hover(
    //  function () { // In
    //    $(this).find(".sm2_link").animate({paddingLeft: "30px"}, 150);
    //  },
    //  function() { // Out
    //    $(this).find(".sm2_link").animate({paddingLeft: "0px"}, 150);
    //  }
    //);
  };
};
