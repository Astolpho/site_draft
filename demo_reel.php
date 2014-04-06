<head>
    <?php header('Access-Control-Allow-Origin: *');?>

   
<script type="text/javascript">
soundManager.setup({
  // path to directory containing SM2 SWF
  url: '/soundManager/swf/'
});

threeSixtyPlayer.config.scaleFont = (navigator.userAgent.match(/msie/i)?false:true);
threeSixtyPlayer.config.showHMSTime = true;

// enable some spectrum stuffs

threeSixtyPlayer.config.useWaveformData = true;
threeSixtyPlayer.config.useEQData = true;

// enable this in SM2 as well, as needed

if (threeSixtyPlayer.config.useWaveformData) {
  soundManager.flash9Options.useWaveformData = true;
}
if (threeSixtyPlayer.config.useEQData) {
  soundManager.flash9Options.useEQData = true;
}
if (threeSixtyPlayer.config.usePeakData) {
  soundManager.flash9Options.usePeakData = true;
}

if (threeSixtyPlayer.config.useWaveformData || threeSixtyPlayer.flash9Options.useEQData || threeSixtyPlayer.flash9Options.usePeakData) {
  // even if HTML5 supports MP3, prefer flash so the visualization features can be used.
  soundManager.preferFlash = true;
}

// favicon is expensive CPU-wise, but can be used.
if (window.location.href.match(/hifi/i)) {
  threeSixtyPlayer.config.useFavIcon = true;
}

if (window.location.href.match(/html5/i)) {
  // for testing IE 9, etc.
  soundManager.useHTML5Audio = true;
}

</script>

<style type="text/css">

#left h2 {
 padding-top:0px;
 margin-bottom:0.25em;
 color:#666;
}

pre.block {
 margin-top:0.5em;
}

/* special case */

#left {
 width:auto;
 max-width:100%;
}

</style>
</head>
<body>
<div id="left">
	<div style="clear:left"></div>
	<div id="sm2-container">
	  <!-- sm2 flash goes here -->
	</div>
		<!-- here are the MP3 links, which are decorated with the 360 canvas element/UI etc. -->
	 	<h2 style="margin-top:1em"></h2>
		<div class="sm2-inline-list"> <!-- remove this class to have one item per line -->
			<div class="ui360 ui360-vis"><a href="music/battle.mp3">Crash 1</a></div>
			<div class="ui360 ui360-vis"><a href="music/battle.mp3">Crash 5</a></div>
			<div class="ui360 ui360-vis"><a href="music/battle.mp3">Crash 6</a></div>
			<div class="ui360 ui360-vis"><a href="music/battle.mp3">China 1</a></div>
	    </div>
	 	<h2 style="clear:both;padding-top:1em"></h2>
	</div>
</div>
</body>