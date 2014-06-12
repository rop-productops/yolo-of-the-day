<?php require_once "crunchbase.php" ?>
<?php require_once "google_maps.php" ?>
<?php require_once "DatabaseforSCW.php" ?>

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
                <p class="blink"><?php print_r(get_quote1($id)); ?></p>
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
            	
            	<div style="width:450px;
    height:250px;
    background-color:white;
    float:left;">
                	<div style="float:left;
    height:125px;
    width:450px;">
                	<IMG width=115px height=115px style="margin:5px;float:left;" src="https://c9.io/israelo/scworks/workspace/scw/images/ltabb.png"></IMG>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                	</div> 
                	  <div style="float:left;
    height:125px;
    width:450px;">
                 	<IMG width=115px height=115px style="margin:5px;float:left;" src="http://israel.rop.launchbrigade.com/images/scott.png"></IMG>
                 	<p >Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
  </div>
        
             	<div class="crunch" id="crunchbase">
  		<?php print_crunchbase_div($crunchbase_id); ?>
  	</div>
             </div>
          <div class="footer">
              <div class="flogo" align="center" margin-top="10px"><img src="http://santacruzworks.com/images/scworks_logo.png" alt="scworks" width="100" height="100" ></div>
          </div>
      
      </body>
      </html>
