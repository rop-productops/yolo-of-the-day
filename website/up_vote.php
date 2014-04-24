
<?php
include_once('View.php');
include_once('DB.php');
$template = new View();
$database = new DB();
$id = $_POST["upvote"];

$my_query=" update `top_ten_yolos` set votes = votes + 1 where `id` = '$id' ";

	 
$database->query( $my_query);
$template->render( 'index.php' );
