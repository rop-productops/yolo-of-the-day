<?php

include_once("View.php");


function print_crunchbase_div($crunchbase_id) {

    $template = new View();

	// get json from crunchbase
	$json = false;

	// convert json to object
	$company = crunchbase_get_company($json);

	// call function for specific element
	$header = crunchbase_div_header($company); 

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

?>
