<?php

include_once('DB-include.php');

function get_member_entry( $ID){
    $database = new DB();
    $my_query = "select * from Members where ID = '$ID'";
    $result = $database->query( $my_query )->fetch();
    return ($result);

}

function get_important_people( $ID){
    $database = new DB();
    $my_query = "select * from Significant_Employees where Company_ID = '$ID'";
    $result = $database->query( $my_query )->fetchAll();
    return ($result);

}

function get_name_id(){
    $database = new DB();
    $my_query = "select ID, Full_Name from Members";
    $result = $database->query( $my_query )->fetch();
    return ($result);
}

print_r (get_member_entry("looker"));

print_r (get_name_id());

print_r (get_important_people("looker"));

?>