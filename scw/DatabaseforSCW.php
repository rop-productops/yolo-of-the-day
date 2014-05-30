<?php

include_once('DB-include.php');

function get_member_entry( $ID){
    $database = new DB();
    $my_query = "select * from Members where ID = '$ID'";
    $result = $database->query( $my_query )->fetch();
    return ($result);

}

function get_all_member_info(){
    $database = new DB();
    $my_query = "select * from Members";
    $result = $database->query( $my_query )->fetchAll();
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
    $result = $database->query( $my_query )->fetchAll();
    return ($result);
}
echo "************************************\n";

echo "You should see all the information for Looker\n";
 
 print_r (get_member_entry("looker"));
 
 echo "************************************\n";

echo "You should see all the information all companies\n";

print_r(get_all_member_info());
 
echo "************************************\n";

echo "You should see the names and ID's for all companies\n"; 

print_r (get_name_id());

echo "************************************\n";

echo "You should see all the important people for looker\n";

print_r (get_important_people("looker"));

echo "************************************\n";




?>