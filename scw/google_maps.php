<?php

include_once("View.php");


function print_google_map($company_id) {

    $template = new View();

    // This file can be found in the templates directory
    $template->render('google_maps_view.php');
}



?>
