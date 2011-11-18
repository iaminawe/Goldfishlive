Drupal.behaviors.audioui360_bhv = function (context) {
  threeSixtyPlayer.config = {

    playNext: false, // stop after one sound, or play through list until end
    autoPlay: false, // start playing the first sound right away
    loadRingColor: '#ccc',// amount of sound which has loaded
    playRingColor: '#000', // amount of sound which has played
    backgroundRingColor: '#eee', // "default" color shown underneath everything else
    imageRoot: sm2_imageRoot_360,// path to prepend for empty.gif used for play/pause button
    animDuration: 500,
    animTransition: Animator.tx.bouncy, // http://www.berniecode.com/writing/animator.html

    circleDiameter: 256,
    circleRadius: 128,
    showHMSTime: true,

    //useWaveformData: true,
    useWaveformData: sm2_audio_waveform,
    waveformDataColor: '#0099ff',
    waveformDataDownsample: 3,
    waveformDataOutside: false,
    waveformDataConstrain: false,
    waveformDataLineRatio: 0.64,

    //useEQData: true,
    useEQData: sm2_audio_eq,
    eqDataColor: '#339933',
    eqDataDownsample: 4,
    eqDataOutside: true,
    eqDataLineRatio: 0.54,

    usePeakData: true,
    peakDataColor: '#ff33ff',
    peakDataOutside: true,
    peakDataLineRatio: 0.5,

    //useAmplifier: true
    useAmplifier: sm2_audio_amplifier
  }

  soundManager.allowPolling = true;   // enable flash status updates. Required for whileloading/whileplaying.
  soundManager.consoleOnly = false;   // if console is being used, do not create/write to #soundmanager-debug
  soundManager.flashLoadTimeout =1000;// ms to wait for flash movie to load before failing (0 = infinity)
  soundManager.flashVersion = 9;      // version of flash to require, either 8 or 9. Some features require 9.
  soundManager.nullURL = 'null.mp3';  // (Flash 8 only): URL of silent/blank MP3 for unloading/stop request.
  soundManager.useMovieStar = true;  // enable (beta) support for Flash 9.0r115+ MPEG4 audio + video
  soundManager.useFastPolling = true;// fast timer=higher callback frequency, combine w/useHighPerformance
  soundManager.useHighPerformance = true;// position:fixed flash movie for faster JS/flash callbacks
  soundManager.wmode = 'transparent';     // null, transparent, opaque (last two allow HTML on top of flash)
  soundManager.allowFullScreen = true;    // enter full-screen (via double-click on movie) for flash 9+ video

  if (threeSixtyPlayer.config.useWaveformData) {
      soundManager.flash9Options.useWaveformData = true;
  }
  if (threeSixtyPlayer.config.useEQData) {
      soundManager.flash9Options.useEQData = true;
  }
  if (threeSixtyPlayer.config.usePeakData) {
      soundManager.flash9Options.usePeakData = true;
  }
};
