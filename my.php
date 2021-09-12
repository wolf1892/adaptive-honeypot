<?php
$host = $_POST['field1'];
$rescode = $_POST['field2'];
$header = $_POST['field3'];
$cookie = $_POST['field4'];
$response = $_POST['field5'];
$cookie2 = $_POST['field6'];
$url = "$";
$url2 = "url";

if(isset($_POST['field1']) && isset($_POST['field2'])) {
    
    $data = 
    "if (strpos($url$url2,'$host') !== false) 
    {

	http_response_code($rescode);
	header('$header');
	setcookie('$cookie', '$cookie2');
	echo '$response';

	} \r\n";

    $ret = file_put_contents('hello.php', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}