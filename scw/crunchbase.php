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


?>