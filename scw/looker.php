<?php require_once "crunchbase.php" ?>
<?php require_once "google_maps.php" ?>

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
            <?php print_google_map("looker"); ?>
        </div>        
            <div>
            	<div class="people">
                	<div class="person1"></div> 
                	<div class="person2"></div>
            	</div>
<!-- Crunch base HERE -->       
            	<div class="crunch" id="crunchbase">
		<?php print_crunchbase_div("looker"); ?>
		</div>
            </div>
        <div class="foot">
            <div class="flogo" align="center" margin-top="10px"><img src="http://santacruzworks.com/images/scworks_logo.png" alt="scworks" width="100" height="100" ></div>
        </div>
        
    </body>
    </html>
       
