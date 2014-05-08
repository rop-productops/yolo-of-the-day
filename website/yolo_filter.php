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

$url="https://api.twitter.com/1.1/search/tweets.json?q=%23yolo&lang=es&result_type=recent&count=69";
//lang=languages; result_type= types of result ie mixed, popular, recent; count= number of yolos shown

//Parameters link = https://dev.twitter.com/docs/api/1.1/get/search/tweets

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$oauth_header = make_oauth_header($url, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, $oauth_header);

$result = curl_exec($ch);
$obj = json_decode($result);
foreach($obj->statuses as $status){
    echo "<br>";
    echo "<hr>";
    
    print_r($status->text);
}

?>
