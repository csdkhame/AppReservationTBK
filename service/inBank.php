<?php 

header('Content-type: text/html; charset=utf-8');
// header('Content-type: application/xml');

$curl_post_data = '{"offsite":"internet_banking_scb","currency":"thb","amount":"100000","return_uri":"https://www.welovetaxi.com/app/booking/dashboard/payment?data=7000624"}';
			//	"api":"pkey_test_59iaxcc7zsr77n4nbkb",	
					
$curl_response = '';


$headers = array();
$url = "https://api.omise.co/charges \ -u skey_test_59iaxcc8idh2bqub4ia:";
                
$curl = curl_init();
curl_setopt($curl, CURLOPT_ENCODING, 'gzip');
curl_setopt($curl, CURLOPT_HTTPHEADER , array(
     'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
));
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.6 (KHTML, like Gecko) Chrome/16.0.897.0 Safari/535.6");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_REFERER, $url);
curl_setopt($curl, CURLOPT_URL, $url);  

curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
$curl_response = curl_exec($curl);

curl_close($curl);

$message = iconv("incoming-charset", "utf-8", $curl_response);
$aaaa = json_decode($curl_response);
echo json_encode($aaaa);
//echo $curl_response;
?>