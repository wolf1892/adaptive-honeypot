if (strpos($url,$_POST['field1']) !== false) {

http_response_code($_POST['field2']);
header($_POST['field3']);
setcookie($_POST['field4'], $_POST['field5']);
echo "$_POST['field6']";

}