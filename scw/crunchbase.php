<?php

include_once("View.php");


function print_crunchbase_div($crunchbase_id) {

    $template = new View();

	$url = "http://api.crunchbase.com/v/2/organization/looker?user_key=19fe1042062066b50d61f1962cfbd56d";

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);

    $parsed = json_decode($result);

	$header = crunchbase_div_header($parsed);
	$company = crunchbase_company($parsed);
	$funding = crunchbase_funding($parsed);
	$team_total = crunchbase_team_total($parsed);

	// print elements
	$template->header = $header;
	$template->company = $company;
	$template->funding = $funding;
	$template->team_total = $team_total;

    // This file can be found in the templates directory
    $template->render('crunchbase_view.php');
}

function crunchbase_div_header($company_object) {
	return "<span>Crunchbase</span>";

}


function crunchbase_company($json){
    return "company";
}

function crunchbase_funding($parsed){
    
    	return $parsed->data->relationships->funding_rounds->items[0]->name;
    
}

function crunchbase_team_total($parsed){
    
    return $parsed->data->relationships->current_team->paging->total_items;
    

}



?>
