<?php

    require_once('DatabaseforSCW.php');
    
    $member_entry= get_member_entry("looker");
    
    print_r($member_entry);