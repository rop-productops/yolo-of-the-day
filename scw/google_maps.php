<?php

include_once("View.php");
include_once("DatabaseforSCW.php");


function print_google_map($company_id) {

    $template = new View();
    
    $lat=get_Long( $ID);
    $lng=get_Lat( $ID);
    
    $template->lat= $lat;
    $template->lng= $lng;


    // This file can be found in the templates directory
    $template->render('google_maps_view.php');
}


?>
