<?php require_once "crunchbase.php" ?>
<?php require_once "google_maps.php" ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body class="body">
    <div class="wrap">
    
        <div class="banner">
    
            <div class="hlogo"><img src="http://santacruzworks.com/images/scworks_logo.png" alt="scworks" width="100" height="100"></div>
            
            <ul class="nav">
                <li><a>PROFILES</a></li>
                <li><a>WORKSPACES</a></li>
                <li><a>NEWS</a></li>
                <li><a>RESOURCES</a></li>
            </ul>
    </br>
            <div class="quote">
            <h1>Looker, finds.</h1>
            <h10>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</h10></div>
        </div>
    
    
        <div class="exquote"></div>
    
    
        <div>
            <div class="lblock"></div>
            <div class="rblock"></div>
        </div>    

        <div class="maps" id="google_map">
            <?php print_google_map("looker"); ?>
        </div>        
            <div>
            <div class="people">
                <div class="person1"></div> 
                <div class="person2"></div>
            </div>
       
            <div class="crunch" id="crunchbase"><?php print_crunchbase_div("looker"); ?></div>
            </div>
        <div class="foot">
            <div class="flogo" align="center"><img src="http://santacruzworks.com/images/scworks_logo.png" alt="scworks" width="100" height="100"></div>
        </div>
    </div>
  </body>
</html>
