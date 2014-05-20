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
    
    <!--BANNER--> 
    <div class="banner">
    
        <div></div>
        
        
        <ul class="nav">
            <li>Lorem</li>
            <li>Ipsum</li>
            <li>Stuff</li>
            <li>Peop</li>
        </ul>
    
        <div></div>
    
    
    </div>
    
    
    
    <!--Executive Quote-->
    <div class="exquote"></div>
    
    

        
        <!--Left Block-->
        <div class="lblock"></div>
        <div></div> 
        
        
        <!--Right Block-->
        <div class="rblock"></div>
        
    
    <!--Map Info-->
    <div class="map" id="google_map">
    <?php print_google_map("looker"); ?>
    
    
    
    
    </div>        
    <!--Last Information-->
    <div>
        
        <!--Left Block-->
        <div></div>
        
        <!--Right Block-->
        <div></div>
    
    </div>
    
    
    
    
    
    
    <!--FOOTER-->
    <div></div>
    
    
    <!--CODE-->
    <div id="google_maps">

      <?php print_google_maps_div("looker"); ?>

    </div>


    <div id="crunchbase">

      <?php print_crunchbase_div("looker"); ?>

    </div>

  </body>
</html>
