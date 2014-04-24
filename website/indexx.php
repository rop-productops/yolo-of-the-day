<html>
<head>
<title>yolo</title>
</head>
<body>
yo, and indeed, lo
<br/>
<br/>

<?php
require_once('DB.php');

$database = new DB();
$results = $database->query('select value from yolo_test where `key` = "example";');

while ( $row = $results->fetch() ) {
	print_r( $row['value']);
}
?>

</body>
</html>
