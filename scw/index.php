<?php

    require_once('DatabaseforSCW.php');
    
    if(!empty($_GET["company"])) {

    $member_entry= get_member_entry($_GET["company"]);
        
         print_r($member_entry);
         
    }
         
    else
    {
    
    $name_id=get_name_id($_GET["company"]);
    
        print_r($name_id);
    }

?>