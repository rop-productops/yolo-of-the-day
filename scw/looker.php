<?php require_once "crunchbase.php" ?>

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
            <li>People</li>
        </ul>
    
        <div></div>
    

    </div>
    
    
    <!--Executive Quote-->
    <div class="exquote"></div>
    
    
<div>
        
        <!--Left Block-->
        <div class="lblock"></div>
        <div></div> 
        
        
        <!--Right Block-->
        <div class="rblock"></div>
        
</div>    

<!-- 5. Map Info-->
    <div class="maps" id="google_map">
    <?php print_google_map("looker"); ?>
        
    </div>        
    <!--Last Information-->
    <div>
        
        <!-- 6. Left Block-->
        <div></div>
        
        <!-- 7. Right Block-->
        <div></div>
    
    </div>
    
    
    <!--CODE-->
    <div id="crunchbase">

      <?php print_crunchbase_div("looker"); ?>

    </div>
</div>
  </body>
</html>
