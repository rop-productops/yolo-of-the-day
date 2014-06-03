<?php require_once "crunchbase.php" ?>
<?php require_once "google_maps.php" ?>

<?php

$id = $this->id;
$name = $this->name;
$crunchbase_id = $this->crunchbase_id;
$linkedin_id = $this->linkedin_id;
$lat = $this->latitude;
$long = $this->longitude;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="body">
    <div class="wrap">
    
        <div class="banner">
        
            <div class="nav">
            <ul>
                <li class="menu"><a href="#">PROFILES</a></li>
                <li class="menu"><a href="#">WORKSPACES</a></li>
                <li class="menu"><a href="#">NEWS</a></li>
                <li class="menu"><a href="#">RESOURCES</a></li>
            </ul>
            </div>
    
        <div class="quote">
            <h1 class="look">Looker, finds.</h1>
            <h10 class="hero_quote">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor."</h10></div>
        </div>
        <div class="exquote"><h1 class="big_quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan tellus vel tincidunt facilisis. Sed sed fringilla est. Quisque ullamcorper congue malesuada. Proin posuere porta dictum."</h1></div>
        <div class="business">
            <div class="lblock">
                <div class="top"><img class="blogo" align="right" src="http://looker.com/sites/all/themes/looker/logo.png">
                </div>
                <div class="binfo">
                <p class="blink">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan tellus vel tincidunt facilisis. Sed sed fringilla est. Quisque ullamcorper congue malesuada.</p>
                </div>
            </div>
            <div class="rblock">
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan tellus vel tincidunt facilisis. Sed sed fringilla est. Quisque ullamcorper congue malesuada. Proin posuere porta dictum. Maecenas feugiat posuere ligula, aliquam hendrerit erat tristique vitae. Aliquam ut quam non quam cursus mattis. Nulla eu ante ante. Maecenas at lectus lobortis, ornare velit at, mattis nibh. In hac habitasse platea dictumst. Vestibulum laoreet malesuada justo eu eleifend. Nam ac ornare leo. Donec sollicitudin nisi in hendrerit viverra. In sed lacus at tellus iaculis luctus. Duis ullamcorper vitae turpis ac vestibulum. Quisque sed pellentesque mi, sit amet sollicitudin neque.</p>
            </div>
        </div>  
        <div class="maps" id="google_map">
            <?php print_google_map($id); ?>
        </div>        
            <div>
            	
            	<div class="people">
                	<div class="person1" style="width: 125px;">
                	<IMG width=115px height=115px style="margin-top:5px; margin-bottom:5px;" src="https://c9.io/israelo/scworks/workspace/scw/images/ltabb.png"></IMG>
                	<p style="float:right;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec ultricies ipsum. Suspendisse nec eros arcu. Aliquam iaculis, dui id adipiscing pretium, libero lacus aliquet quam, eu vestibulum felis ipsum ac est. Cras purus purus, sollicitudin vitae odio nec, aliquet ultricies purus. Mauris eget vestibulum sapien, sit amet placerat nunc. </p>
                	</div> 
   