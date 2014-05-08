<?php

function print_crunchbase_div($crunchbase_id) {
	// get json from crunchbase
	$json = false;

	// convert json to object
	$company = false;

	// call function for specific element
	$header = crunchbase_div_header($company); 

	// print elements
	print $header;

}

function crunchbase_div_header($company_object) {
	return "<span>Crunchbase</span>";

}


?>
