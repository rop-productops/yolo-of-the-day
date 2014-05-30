<?php

include_once("View.php");


function print_google_map($company_id) {

    $template = new View();
    
    $lat=37;
    $lng=-122;
    
    $template->lat= $lat;
    $template->lng= $lng;


    // This file can be found in the templates directory
    $template->render('google_maps_view.php');
}


?>
