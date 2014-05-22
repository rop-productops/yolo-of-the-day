<?php

include_once("View.php");



function print_crunchbase_div($crunchbase_id) {

    $template = new View();

	$url = "http://api.crunchbase.com/v/2/organization/".$crunchbase_id."?user_key=19fe1042062066b50d61f1962cfbd56d";

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);

    $parsed = json_decode($result);

	$header = crunchbase_div_header($parsed);
	$funding = crunchbase_funding($parsed);
	$team_total = crunchbase_team_total($parsed);
	$company_description = crunchbase_company_description($parsed);
	$date_founded = crunchbase_date_founded($parsed);
	$company_link = crunchbase_company_homepage_url($parsed);

	// print elements
	$template->header = $header;
	$template->funding = $funding;
	$template->team_total = $team_total;
    $template->description = $company_description;
    $template->date_founded = $date_founded;
    $template->company_homepage_url = $company_link;

    // This file can be found in the templates directory
    $template->render('crunchbase_view.php');
}

function crunchbase_div_header($parsed) {

	return $parsed->data->properties->name;

}

function crunchbase_funding($parsed){
    
    	return $parsed->data->relationships->funding_rounds->items[0]->name;
    
}

function crunchbase_team_total($parsed){
    
    return $parsed->data->relationships->current_team->paging->total_items;
    

}

function crunchbase_company_description($parsed){
    
    return $parsed->data->properties->description;
    
}

function crunchbase_date_founded($parsed){
    
    return $parsed->data->properties->founded_on;
    
}

function crunchbase_company_homepage_url($parsed){
    
    return $parsed->data->properties->homepage_url;
    
}


function crunchbase_founded_on($parsed){
    print_r($parsed->data->properties->founded_on);
};

function crunchbase_markets($parsed){
    $markets="";
    $market_array=$parsed->data->relationships->markets->items;
    foreach($market_array as $market){
        $markets.=$market->name."\n";
    }
    echo $markets;
}


?>
