<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</head>

<div id="rounded">

<img src="img/top_bg.gif"/><!-- image with rounded left and right cornors -->
<div id="main" class="container"><!-- our main container element -->

<h1> Erik Ashley</h1> <!-- titles-->
<h2> Video Game Audio</h2>

<ul id="navigation"> <!-- the navigation menu-->
<li><a href="#page1">Artist Statement </a></li><!-- a few navigation buttons-->
<li><a href="page2">Demo Reel</a></li>
<li><a href="page3">Biography</a></li>
<li><a href="page4">Credits</a></li>
<li><img id="loading" src="img/ajax_load.gif" alt="loading" /></li><!-- rotating loading gif-->
</ul>

<div class="clear"></div><!-- the above links are floated we have to use the cleardix hack-->

<div id="pagecontent"><!-- this is where our AJAX-ed content goes-->
Hello this is the default content
</div>

</div>

<div class="clear"></div> 

<img src="img/bottom_bg.gif" /><!--the bottom two rounded cornors of the page -->

</div>