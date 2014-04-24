<?php

include_once('View.php');
include_once('DB.php');

$template = new View();
$database = new DB();

$query_results = $database->query( 'select * from top_ten_yolos' );

$template->query_results = $query_results;

// This file can be found in the templates directory.
$template->render( 'vote.php' );
?>
