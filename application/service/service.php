<?php 
header('Content-type: text/html; charset=utf-8');
//  $curl_post_data = '{
//     "request" : "'.$_POST[province].'",
//      "field":{"0":"id","1":"topic","2":"stay"}
   
// }';
//$request = stripslashes( $_POST[request]);
//$field = stripslashes( $_POST[field]);
// $curl_post_data = '{"place_default":"'.$_POST[place_default].'","stay":"'.$_POST[stay].'", "aum_from":"'.$_POST[aum_from].'", "place_default_to":"'.$_POST[place_default_to].'", "stay_to":"'.$_POST[stay_to].'", "aum_to":"'.$_POST[aum_to].'"}';
$curl_post_data = '{"from":"'.$_POST[place_default].'","stay":"'.$_POST[stay].'", "aum_from":"'.$_POST[aum_from].'", "to":"'.$_POST[place_default_to].'", "stay_to":"'.$_POST[stay_to].'", "aum_to":"'.$_POST[aum_to].'"}';
$curl_response = '';
//$data = json_decode(file_get_contents('php://input'), true);
//print_r($data);
//$curl_post_data = json_decode(file_get_contents('php://input'), true);


// //echo $curl_post_data;
$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'API-KEY: ea1b6d331a20b66041369a63251410d4ec748f27';
$url = "http://www.services.t-booking.com/Product/product_fix";
//echo $url;
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
$res = json_decode($curl_response);
//print_r($aaaa);
//echo $aaaa;
// foreach ($aaaa as $data ) {
// 	// $data->id.' ' .$data->name. "<Br>";
// 	$row_data[] = $data;
// }
foreach ($res as $data ) {

         //while($row = $result->fetch_assoc()) {
        $rows[] = $row;
        $file_name = $data->transfer_icon; 
        $remote_file_url = 'http://t-booking.com/pic/carmodelicon/'.$file_name.'.png';
        //$remote_file_url = 'http://t-booking.com/data/qr/vc/7050498_7849160235.png';
         

         $local_file = '../files/img/imgicon/'.$file_name.'.png';
        //$local_file = '../data/qr/vc/7050498_7849160235.png';
        
        copy( $remote_file_url, $local_file );
    }
echo json_encode($data);

?>