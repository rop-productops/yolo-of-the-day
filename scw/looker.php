<?php require_once "crunchbase.php" ?>
<?php require_once "google_maps.php" ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    
    
    
    <!-- 1. BANNER-->
    <div>
    
        <div></div>
        
        
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    
        <div></div>
    
    
    </div>
    
    
    
    <!-- 2. Executive Quote-->
    <div></div>
    
    
    
    
    
    <!--Middle Information-->
    <div>
        
        <!-- 3. Left Block-->
        <div></div>
        <div></div> 
        
        
        <!-- 4. Right Block-->
        <div></div>
        
    </div>
    
    
    <!-- 5. Map Info-->
    <div></div>        
    
    
    
    
    
    
    <!--Last Information-->
    <div>
        
        <!-- 6. Left Block-->
        <div></div>
        
        <!-- 7. Right Block-->
        <div></div>
    
    </div>
    
    
    
    
    
    
    <!-- 8. FOOTER-->
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
