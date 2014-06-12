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
$logo = $this->logo;
$banner = $this->banner;
$subhead = $this->subhead;
$longtext = $this->longtext;
$quote1 = $this->quote1;
$quote2 = $this->quote2;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="body">
    <div class="wrap">

      <div class="banner" style="background-image:url('<?php print($banner);?>');" >
        <div class="nav">
        <ul>
          <li class="menu"><a href="#">PROFILES</a></li>
          <li class="menu"><a href="#">WORKSPACES</a></li>
          <li class="menu"><a href="#">NEWS</a></li>
          <li class="menu"><a href="#">RESOURCES</a></li>
        </ul>
      </div>

      <div class="quote">
            <h1 class="look"><?php print($name);?></h1>
            <h10 class="hero_quote"><?php print($subhead);?></h10></div>
        </div>
        <div class="exquote"><h1 class="big_quote"><?php print($quote1);?></h1></div>
        <div class="business">
            <div class="lblock">
                <div class="top"><img class="blogo" align="right" src="http://looker.com/sites/all/themes/looker/logo.png">
                </div>
                <div class="binfo">
                <p class="blink"><?php print($quote2); ?></p>
                </div>
            </div>
            <div class="rblock">
                <p class="desc"><?php print($longtext);?></p>
            </div>
        </div>  
        <div class="maps" id="google_map">
            <?php print_google_map($id, $linkedin_id); ?>
        </div>        
            <div>
            	
            	<div style="width:450px;
    height:250px;
    background-color:white;
    float:left;">
                	<div style="float:left;
    height:125px;
    width:450px;">
                	<IMG width=115px height=115px style="margin:5px;float:left;" src="<?php print(get_important_people($id)[0]["Image_url"]);?>"></IMG>
                	<p><?php print(get_important_people($id)[0]["About"]);?></p>
                	</div> 
                	  <div style="float:left;
    height:125px;
    width:450px;">
                 	<IMG width=115px height=115px style="margin:5px;float:left;" src="<?php print(get_important_people($id)[1]["Image_url"]);?>"></IMG>
                 	<p ><?php print(get_important_people($id)[1]["About"]);?></p>
  </div>
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
