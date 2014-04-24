<?php

function make_oauth_nonce(){
    $mt = microtime();
    $rand = rand();
    return md5($mt . $rand);
}

function make_oauth_time(){
    return strval(time());
}

function make_oauth_header($url, $method){
    $params = array();
    
    $url_parsed = parse_url($url);
    if (isset($url_parsed['query'])){
	parse_str($url_parsed['query'], $params);
    }
    $baseurl = $url_parsed['scheme'] . '://' . $url_parsed['host'];
    if(isset($url_parsed['path'])){
        $baseurl = $baseurl . $url_parsed['path'];
    }

    $auth_array = array(
	"oauth_consumer_key"=>"L0rXemOe0gafcTYCoYBda3Cmu", // this is Eric's apikey
	"oauth_nonce"=>make_oauth_nonce(), // always get a fresh nonce
	"oauth_signature_method"=>"HMAC-SHA1", // this code only supports hmac-sha1
	"oauth_timestamp"=>make_oauth_time(), // always get a fresh time
	"oauth_token"=>"", // auth token is always empty for Eric's app
	"oauth_version"=>"1.0"); // version is always 1.0
    
    $allparams_array = array_merge($auth_array, $params);
    
    ksort($allparams_array);
    
    $allparams_string = "";
    foreach( $allparams_array as $k => $v ){
        if($allparams_string !== ""){
            $allparams_string = $allparams_string . "&";
        }
        $allparams_string = $allparams_string . rawurlencode($k) . "=" . rawurlencode($v);
    }
    
    
    $signable_string = rawurlencode($method) . "&" . rawurlencode($baseurl) . "&" . rawurlencode($allparams_string);
    
    $secret = "BXJPnmG0lMpPi0qBr3bD5pFNiPYFbuUipDYlY5YyDahAId8npW&"; // this is Eric's api password
    $signature = base64_encode(hash_hmac("sha1", $signable_string, $secret, true)); // this code only supports sha1
    
    $auth_array['oauth_signature'] = rawurlencode($signature);
    
    ksort($auth_array);
    
    $header_value = "";
    foreach($auth_array as $k => $v){
        if($header_value === ""){
            $header_value = "Authorization: OAuth ";
        } else {
            $header_value = $header_value . ", ";
        }
        $header_value = $header_value . $k . '="' . $v . '"';
    }
    
    $header = array( $header_value );
    
    return $header; 
}
//start of my code
include_once('View.php');
include_once('DB.php');
include_once('databaseinterfaceyoloswag.php');

$template = new View();
$database = new DB();

$url="https://api.twitter.com/1.1/search/tweets.json?q=%23yolo&count=20&lang=en&result_type=recent";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$oauth_header = make_oauth_header($url, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, $oauth_header);

$result = curl_exec($ch);
$result_obj = json_decode($result);
//print_r($result_obj->statuses);exit;

$yolos=array();
$tweeters=array();
//$dates=array();
//Dates are no longer needed, being done by the other people. All the code has been commented out
$i=0;

foreach($result_obj->statuses as $status){
  //adds yolos to array
  $yolos[$i] = $status->text;
  //echo "\n", $yolos[$i], "\n";
  //adds tweeter screen_name to array
  $tweeters[$i] = $status->user->screen_name;
  //echo "- ", $tweeters[$i], "\n";
  //adds date to the dates array
  //$dates[$i] = $status->created_at;
  //echo "Date: ", $dates[$i], "\n";
  //str_replace on each in case of quotes, both " and ', which would mess up the insert
  $tweet=$yolos[$i];
  $tweet=str_replace('"', '\"', $tweet);
  $tweet=str_replace("'", "\'", $tweet);
  $tweeter=$tweeters[$i];
  $tweeter=str_replace('"', '\"', $tweeter);
  $tweeter=str_replace("'", "\'", $tweeter);
  /*
  $date=$dates[$i];
  $date=str_replace('"', '\"', $date);
  $date=str_replace("'", "\'", $date);
  $timestamp = strtotime($date);
  $date = date('Y-m-d', $timestamp);
  //Makes it an actual date instead of a string
  */
  //Inserts into the DB
  //$query_results = $database->query( "INSERT INTO top_ten_yolos(`tweet`,`original_tweeter`)VALUES('$tweet','$tweeter');" );
  insert_yolo_day($tweet, $tweeter);
  $i += 1;
}
$i=0;
echo "Done","\n";
?>
