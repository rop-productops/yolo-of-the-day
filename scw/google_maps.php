<?php

include_once("View.php");
include_once("DatabaseforSCW.php");


function print_google_map($ID, $linkedin_id) {

    $template = new View();
    
    $lat=get_Lat( $ID);
    $lng=get_Long( $ID);

    $template->lat= $lat;
    $template->lng= $lng;
    $template->linkedin_id= $linkedin_id;
    

    // This file can be found in the templates directory
    $template->render("google_maps_view.php");
}
?>
