<?php 
header('Content-type: text/html; charset=utf-8');
$to_end = $_POST[end];
$to_start = $_POST[start];

/*https://www.google.co.th/maps/place/*/

$curl_post_data = '{"start" : '.json_encode($to_start).',"end" : '.json_encode($to_end).'}';
$curl_response = '';
//echo $curl_post_data;

            
echo json_encode($curl_post_data);


/*
$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'API-KEY: ea1b6d331a20b66041369a63251410d4ec748f27';
$url = "http://www.services.t-booking.com/Product/product_fix";

$curl = curl_init();
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
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
//echo $curl_response;
curl_close($curl);

$message = iconv("incoming-charset", "utf-8", $curl_response);
//$aaaa = json_decode($curl_response);

echo json_encode($aaaa);

7.8884043,98.3021069

7.888399 , 98.304291*/


?>