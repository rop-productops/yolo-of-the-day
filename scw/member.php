<?php

include_once("View.php");
require_once('DatabaseforSCW.php');
    
if(!empty($_GET["company"])) {
    $member_entry= get_member_entry($_GET["company"]);

    $template = new View();
    $template->id = $member_entry["ID"];
    $template->crunchbase_id = $member_entry["CrunchbaseID"];
    $template->linkedin_id = $member_entry["LinkedinID"];
    $template->latitude = $member_entry["Latitude"];
    $template->longitude = $member_entry["Longitude"];
    $template->name = $member_entry["Full name"];

    $template->render('member_view.php');

    //thanks for a great end of the year all!
    //you've been really great and motivated and I know that
    //if you apply yourselves and the things that you've learned
    //here, you'll become great software engineers!!
    //Congradulations!

    print_r($member_entry);
} else {
    $name_id=get_name_id($_GET["company"]);
    print_r($name_id);
}

?>
