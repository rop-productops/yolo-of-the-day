<?php

include_once('DB-include.php');

function get_member_entry( $ID){
    $database = new DB();
    $my_query = "select * from Members where ID = '$ID'";
    $result = $database->query( $my_query )->fetch();
    return ($result);

}

?>