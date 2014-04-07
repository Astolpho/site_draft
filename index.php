<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php header('Access-Control-Allow-Origin: *');?>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/360player.css" />
    <link rel="stylesheet" type="text/css" href="css/360player-visualization.css" />
    <link rel="stylesheet" type="text/css" href="css/flashblock.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/berniecode-animator.js"></script>
    <script type="text/javascript" src="javascript/animator.js"></script>
    <script type="text/javascript" src="javascript/index.js"></script>
    <script type="text/javascript" src="javascript/demo_reel.js"></script>
    <script type="text/javascript" src="javascript/soundmanager2.js"></script>
    <script type="text/javascript" src="javascript/360player.js"></script>

        <?php header('Access-Control-Allow-Origin: *');?>

     <?php 
         if( isset( $_REQUEST['tab_id'] ) && is_string( $_REQUEST['tab_id'] ) )
         {
             $tab_id = $_REQUEST['tab_id'];
         }
         else
         {
             $tab_id = false;
         }
     ?>
   
    <script type="text/javascript">
    soundManager.setup({
      // path to directory containing SM2 SWF
      url: 'soundManager/swf/'
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
<div class="main_background">
    <div id="rounded">

        <div id="main" class="container"><!-- our main container element -->

            <h1 class="title_name"> Erik Ashley</h1> <!-- titles-->
            <h2 class="title_occupation"> Video Game Audio</h2>

            <ul class="navigation" id="navigation"> <!-- the navigation menu-->
                <li class="blue_button"><span onclick="show_tab(this)" id="artist_statement">Artist Statement </span></li><!-- a few navigation buttons-->
                <li class="blue_button"><span onclick="show_tab(this)" id="demo_reel">Demo Reel</span></li>
                <li class="blue_button"><span onclick="show_tab(this)" id="biography">Biography</span></li>
                <li class="blue_button"><span onclick="show_tab(this)" id="credits">Credits</span></li>
                <li> <img id="loading" src="img/ajax_load.gif" alt="loading" /></li><!-- rotating loading gif-->
            </ul>
            <a href="#main"></a>
            <div class="clear"></div><!-- the above links are floated we have to use the cleardix hack-->

            <div id="pageContent"><!-- this is where our AJAX-ed content goes-->
            <h3 class="slogan">Pushing Game Audio Forward</h3>
            </div>
            <div style="display:none" id="artist_statement_div">
                <span id="artist_statement_text">Insert Text Here</span>
            </div>
            <div style="display:none" id="biography_div">
                <span id="artist_statement_text">Insert Text Here</span>
            </div>
            <div style="display:none" id="credits_div">
                <span id="artist_statement_text">Insert Text Here</span>
            </div>
            <div style="display:none" id="demo_reel_div">
                <div id="left">
                    <div style="clear:left"></div>
                    <div id="sm2-container">
                      <!-- sm2 flash goes here -->
                    </div>
                        <!-- here are the MP3 links, which are decorated with the 360 canvas element/UI etc. -->
                        <h2 style="margin-top:1em"></h2>
                        <div class="sm2-inline-list"> <!-- remove this class to have one item per line -->
                            <div class="ui360 ui360-vis"><a href="music/battle.mp3">Battle</a></div>
                            <div class="ui360 ui360-vis"><a href="music/buildup-02.mp3">Build-up</a></div>
                            <div class="ui360 ui360-vis"><a href="music/player-02.mp3">The Player</a></div>
                            <div class="ui360 ui360-vis"><a href="music/trailer-1.mp3">The Army</a></div>
                            <div class="ui360 ui360-vis"><a href="music/trailer-2.mp3">The Flight</a></div>
                            <div class="ui360 ui360-vis"><a href="music/playful-8bit.mp3">Exploring 8bit</a></div>
                            <div class="ui360 ui360-vis"><a href="music/space-8bit.mp3">Revisiting space 8bit</a></div>
                        </div>
                        <h2 style="clear:both;padding-top:1em"></h2>
                </div>
            </div>
        </div>
        <div id="tab_contents"  >
        </div>
        <div class="clear"></div> 
    </div>
</div>
<?php include("footer.php");?>);

<input type="hidden" id="tab_id" value="<?php echo($tab_id) ?>"/>
</body>
</htm    l