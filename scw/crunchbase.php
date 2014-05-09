<?php

function print_crunchbase_div($crunchbase_id) {
	$url = "http://api.crunchbase.com/v/2/organization/looker?user_key=19fe1042062066b50d61f1962cfbd56d";

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);

    $parsed = json_decode($result);

	// call function for specific element
	$header = crunchbase_div_header($parsed);

	// print elements
	print $header;

}

function crunchbase_div_header($company_object) {
	return "<span>Crunchbase</span>";

}

function crunchbase_funding($parsed){
    
    	print_r($parsed->data->relationships->funding_rounds->items[0]->name);
    
}

function crunchbase_team_total($parsed){
    
    print_r($parsed->data->relationships->current_team->paging->total_items);
    
    print"/n";
    
}




?>