<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php header('Access-Control-Allow-Origin: *');?>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/360player.css" />
    <link rel="stylesheet" type="text/css" href="css/360player-visualization.css" />
    <link rel="stylesheet" type="text/css" href="css/flashblock.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/index.js"></script>
    <script type="text/javascript" src="javascript/demo_reel.js"></script>
    <script type="text/javascript" src="javascript/animator.js"></script>
    <script type="text/javascript" src="javascript/soundmanager2.js"></script>
    <script type="text/javascript" src="javascript/360player.js"></script>

</head>
<body>
<div class="main_background">
    <div id="rounded">

        <div id="main" class="container"><!-- our main container element -->

            <h1 class="title_name"> Erik Ashley</h1> <!-- titles-->
            <h2 class="title_occupation"> Video Game Audio</h2>

            <ul class="navigation" id="navigation"> <!-- the navigation menu-->
                <li class="blue_button"><a href="#artist_statement" id="artist_statement">Artist Statement </a></li><!-- a few navigation buttons-->
                <li class="blue_button"><a href="#demo_reel" id="demo_reel">Demo Reel</a></li>
                <li class="blue_button"><a href="#biography" id="biography">Biography</a></li>
                <li class="blue_button"><a href="#credits" id="credits">Credits</a></li>
                <li> <img id="loading" src="img/ajax_load.gif" alt="loading" /></li><!-- rotating loading gif-->
            </ul>
            <a href="#main"></a>
            <div class="clear"></div><!-- the above links are floated we have to use the cleardix hack-->

            <div id="pageContent"><!-- this is where our AJAX-ed content goes-->
            <meta charset="utf-8"/>Pushing Game Audio Forward
            </div>
        </div>
        <div id="tab_contents"  >
        </div>
        <div class="clear"></div> 
    </div>
</div>
<?php include("footer.php");?>);
</body>
</html>