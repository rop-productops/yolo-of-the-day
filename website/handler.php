<?php

include_once('View.php');
include_once('DB.php');
$template = new View();
$database = new DB();
$responses = array();
if ( ! empty( $_POST[ 'name' ] )
AND ! empty( $_POST[ 'email' ] )
AND ! empty( $_POST[ 'message' ] ) ) {
        $name = $_POST[ 'name' ];
        $email = $_POST[ 'email' ];
        $message = $_POST[ 'message' ];
        $insert_message_query = 'insert into `contactus` ( `name`, `email`, `message` ) values ( "' . $name . '", "' . $email . '", "' . $message . '" ) ';
        $query_results = $database->query( $insert_message_query );
        $responses[] = 'Thank you for your message!';
        $responses[] = 'Have a nice day.';
} else {
        $responses[] = 'We did not receive your message, please submit the form againw.';
}
$template->responses = $responses;

echo "The Game";

?>