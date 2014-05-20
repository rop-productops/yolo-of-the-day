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

function crunchbase_div_header($company_object) {
	return $parsed->data->properties->name;

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

function crunchbase_company_description($parsed){
    
    return $parsed->data->properties->description;
    
}

function crunchbase_date_founded($parsed){
    
    return $parsed->data->properties->founded_on;
    
}

function crunchbase_company_homepage_url($parsed){
    
    return $parsed->data->properties->homepage_url;
    
}

function crunchbase_employee_bio($parsed){
    
    //print_r($parsed->data)
    //Copypasted this in from another file. Probaly should be edited. 
    $i=0;
    function get_bio($i,$parsed){
        /*     Now taking it as a parameter
        $url = "http://api.crunchbase.com/v/2/organization/looker?user_key=19fe1042062066b50d61f1962cfbd56d";

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        $parsed = json_decode($result);
        */
        //Constructs the name for the URL
        $employee=$parsed->data->relationships->current_team->items[$i]->first_name . "-" . $parsed->data->relationships->current_team->items[$i]->last_name;
        //Just takes the name for printing out
        $employee_name=$parsed->data->relationships->current_team->items[$i]->first_name . " " . $parsed->data->relationships->current_team->items[$i]->last_name;
        //Makes the URL
        $url2 = "http://api.crunchbase.com/v/2/person/".$employee."?user_key=19fe1042062066b50d61f1962cfbd56d";
        $ch2 = curl_init($url2);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        $result2 = curl_exec($ch2);
        $parsed2 = json_decode($result2);
        
        //Makes sure there is a bio
        if( isset($parsed2->data->properties->bio) ){
            $bio=$parsed2->data->properties->bio;
        } else {
            $bio="Nothing found";
        }
        //Gives the employee name and bio
        echo "The employee is $employee_name","\n","His profile can be found at $url2","\n";
        echo "His bio:","\n",$bio,"\n";
        }
    //Calls the function for the first time
    get_bio($i,$parsed);
    $i+=1;
    
    //Makes sure there are still employees left
    while($i<7){
        //Checks if you want another bio
        echo "Show next employee bio? (y/n)","\n";
        $response=fgets(STDIN);
        while(($response[0] != "y") and ($response[0] != "n")){
            echo "Please enter 'y' or 'n'","\n";
            $response=fgets(STDIN);
        }
    //Gives another or exits depending on response
    if($response[0]=="n"){
        exit;
    }
    else if($response[0]=="y"){
        get_bio($i,$parsed);
        $i+=1;
    }
}
    
    echo "Out of employees","\n";
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
