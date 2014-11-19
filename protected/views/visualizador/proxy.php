<?php
// read in the variables

//print_r($get);die;
$onlineresource=$get['url'];
$parsed = parse_url($onlineresource);
$host = @$parsed["host"];
$path = @$parsed["path"] . "?" . @$parsed["query"];
if(empty($host)) {
	$host = "localhost";
}
$port = @$parsed['port'];
//print_r($port);die;
if(empty($port)){
	$port="8080";
}
$contenttype = @$get['contenttype'];

if(empty($contenttype)) {
	$contenttype = "text/xml";
}
$data = @$GLOBALS["HTTP_RAW_POST_DATA"];
// define content type
header("Content-type: " . $contenttype);

if(empty($data)) {
	
	$result = Yii::app()->funcion->send_request($onlineresource);
}
else {
	// post XML
	$posting = new HTTP_Client($host, $port, $data);
	$posting->set_path($path);
	$result = $posting->send_request();
}

// strip leading text from result and output result
$len=strlen($result);
$pos = strpos($result, "<");
if($pos > 1) {
	$result = substr($result, $pos, $len);
}
//$result = str_replace("xlink:","",$result);
die($result);
?>