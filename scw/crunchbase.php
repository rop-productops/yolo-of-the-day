<?php

include_once("View.php");


function print_crunchbase_div($crunchbase_id) {

    $template = new View();

	$url = "http://api.crunchbase.com/v/2/organization/looker?user_key=19fe1042062066b50d61f1962cfbd56d";

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);

    $parsed = json_decode($result);

	// convert json to object
	$company = crunchbase_get_company($parsed);
	
	// call function for specific element
	$header = crunchbase_div_header($parsed);

	// print elements
	$template->company = $company;
	$template->header = $header;

    // This file can be found in the templates directory
    $template->render('crunchbase_view.php');
}

function crunchbase_div_header($company_object) {
	return "<span>Crunchbase</span>";

}


function crunchbase_get_company($json){
    return "company";
}

function crunchbase_funding($parsed){
    
    	print_r($parsed->data->relationships->funding_rounds->items[0]->name);
    
}

function crunchbase_team_total($parsed){
    
    print_r($parsed->data->relationships->current_team->paging->total_items);
    
    print"/n";
    
}



?>
