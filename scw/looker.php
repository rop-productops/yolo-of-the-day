<?php require_once "crunchbase.php" ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    
    
    
    <!--BANNER-->
    <div class="1">
    
        <div></div>
        
        
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    
        <div></div>
    
    
    </div>
    
    
    
    <!--Executive Quote-->
    <div></div>
    
    
    
    
    
    <!--Middle Information-->
    <div>
        
        <!--Left Block-->
        <div></div>
        <div></div> 
        
        
        <!--Right Block-->
        <div></div>
        
    </div>
    
    
    <!--Map Info-->
    <div id="google_map">
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
    <div id="crunchbase">

      <?php print_crunchbase_div("looker"); ?>

    </div>

  </body>
</html>
