<?php

include_once('DB-include.php');

date_default_timezone_set('America/Los_Angeles');
$database = new DB();

function insert_yolo_day
($tweet,$original_tweeter)
{
    $database = new DB();
    $vote=0;
    $date= date("Y-m-d");
    $my_query= "insert into top_ten_yolos (tweet,original_tweeter,votes,date) Values ( '$tweet', '$original_tweeter','$vote', '$date') ";
    $database->query( $my_query  );
}

function are_there_yolos_for_today ()
{
    $database = new DB();
    $current_date= date("Y-m-d");
    $today_yolo_query= "select * from top_ten_yolos where date = '$current_date'";
    $result = $database->query( $today_yolo_query );
    $all_rows = $result->fetchAll();
    if (count($all_rows) >= 1) {
        return true;
    }
    return false;
}

function no_more_yolo_for_yesterday_all_dead ()
{
   $database = new DB();
   $current_date= date("Y-m-d");
   $delete_query= "delete * from yolodiestoday";
   $result = $database->query( $delete_query );
}

?>
