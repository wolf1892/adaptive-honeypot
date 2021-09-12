<?php


$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];








if (strpos($url,'wp-login.php') !== false) {
	header('HTTP/1.1 302 Found');
	header('Date: Fri, 12 Feb 2021 21:32:53 GMT');

header('Server: Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.2.34');

header('X-Powered-By: PHP/7.2.34');

header('Expires: Wed, 11 Jan 1984 05:00:00 GMT');

header('Cache-Control: no-cache, must-revalidate, max-age=0');
setcookie("wordpress_test_cookie", "WP+Cookie+check");
header('X-Frame-Options: SAMEORIGIN');
setcookie("wordpress_96448b7064b93818605e444a0fa2799c", "user%7C1613341742%7Co6d6wCoaoxQiCaqdHWGOV9aaqgnHr6hD9HpxIPTlMbS%7C7107bf31bd8012a1ff4d1949fd255723c5151c8fc9b1665a72f4ec04d9ceebd9");
setcookie("wordpress_96448b7064b93818605e444a0fa2799c", "user%7C1613341742%7Co6d6wCoaoxQiCaqdHWGOV9aaqgnHr6hD9HpxIPTlMbS%7C7107bf31bd8012a1ff4d1949fd255723c5151c8fc9b1665a72f4ec04d9ceebd9");
setcookie("wordpress_logged_in_96448b7064b93818605e444a0fa2799c", "user%7C1613341742%7Co6d6wCoaoxQiCaqdHWGOV9aaqgnHr6hD9HpxIPTlMbS%7C8784bfd35c6f00ee57735b8134f500f5f43c93ac43542acba282bacabdba9a0c");


header('X-Redirect-By: WordPress');
header('Content-Length: 0');
header('Connection: close');
header('Content-Type: text/html; charset=UTF-8');



	 $postdata = file_get_contents("php://input");	
	  $uniquestr = substr($postdata, -24, 8);
	header('Location: /'.$uniquestr);
die();

}





if (strpos($url,'/wp-admin/admin.php') !== false) 
    {

	http_response_code(200);
	header('Server: Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.2.34');
	setcookie('wordpress_96448b7064b93818605e444a0fa2799c', '312424545adsadasd');
	echo 'value : 1';

	} 
if (strpos($url,'/vpn/../vpns/cfg/smb.conf') !== false) 
    {

	http_response_code(200);
	header('Server: Apache/2.4.46 (Win64) OpenSSL/1.1.1g');
	setcookie('_session_ID', '312424545adsadasd');
	echo 'success';

	} 
if (strpos($url,'/vpn/../vpns/portal/scripts/newbm.pl') !== false) 
    {

	http_response_code(200);
	header('Server: Apache/2.4.46 (Win64) OpenSSL/1.1.1g');
	setcookie('_session_ID', '312424545adsadasd');
	echo '.ns_reload()';

	} 

if (strpos($url,'/+CSCOE+/logon.html') !== false) 
    {

	http_response_code(200);
	header('Server: Apache/2.4.46 (Win64) OpenSSL/1.1.1g /httpd/');
	setcookie('_session_ID', '312424545adsadasd');
	echo 'SSL VPN Service +CSCOE+ +webvpn+ webvpnlogin';

	} 
if (strpos($url,'/servlets/FileUploadServlet?fileName=../jsp/WebStart-GLsTzBeORa.jsp') !== false) 
    {

	http_response_code(200);
	header('Server: Apache/2.4.46 (Win64) OpenSSL/1.1.1g /httpd/');
	setcookie('_session_ID', '312424545adsadasd');
	echo '/Successfully written polleddata file/';

	} 
if (strpos($url,'/jsp/') !== false) 
    {

	http_response_code(200);
	header('Server: Apache/2.4.46 (Win64) OpenSSL/1.1.1g /httpd/');
	setcookie('_session_ID', '312424545adsadasd');
	echo 'Linux';

	} 
if (strpos($url,'/phpmyadmin/') !== false) 
    {

	http_response_code(200);
	header('Server: Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.2.34');
	setcookie('wordpress_96448b7064b93818605e444a0fa2799c', '312424545adsadasd');
	echo 'PMA_VERSION:4.8.0';

	} 

if (strpos($url,'/spywall/login.php') !== false) 
    {

	http_response_code(200);
	header('Server: Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.2.34');
	setcookie('wordpress_96448b7064b93818605e444a0fa2799c', '312424545adsadasd');
	echo '<title\>Symantec Web Gateway\<\/title\>';

	} 

if (strpos($url,'/zimbraAdmin/res/res/I18nMsg,AjxMsg,ZMsg,ZmMsg,AjxKeys,ZmKeys,ZdMsg,Ajx%20TemplateMsg.js.zgz?v=091214175450&skin=../../../../../../../../../opt/zimbra/conf/localconfig.xml%00') !== false) 
    {

	http_response_code(200);
	header('Server: Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.2.34');
	setcookie('wordpress_96448b7064b93818605e444a0fa2799c', '312424545adsadasd');
	echo '<key name="zimbra_ldap_password"> <value>@install.key@</value> <key name="zimbra_user"> <value>@install.key@</value>';

	} 
if (strpos($url,'/index.php?option=') !== false) 
    {

	http_response_code(200);
	header('Server: Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.2.34');
	setcookie('wordpress_96448b7064b93818605e444a0fa2799c', '312424545adsadasd');
	echo '#{start}(.*)#{fin}';

	} 
