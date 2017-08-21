<?php 
//header ('Content-type: text/html; charset=utf-8');
//  $curl_post_data = '{
//     "request" : "'.$_POST[province].'",
//      "field":{"0":"id","1":"topic","2":"stay"}
   
// }';
//$request = stripslashes( $_POST[request]);
//$field = stripslashes( $_POST[field]);
//$curl_post_data = '{"place_default":"'.$_POST[place_default].'","stay":"'.$_POST[stay].'", "aum_from":"'.$_POST[aum_from].'", "place_default_to":"'.$_POST[place_default_to].'", "stay_to":"'.$_POST[stay_to].'", "aum_to":"'.$_POST[aum_to].'"}';
// $curl_post_data = '{"place_default":"'.$_POST[place_default].'","stay":"'.$_POST[stay].'", "aum_from":"'.$_POST[aum_from].'", "place_default_to":"'.$_POST[place_default_to].'", "stay_to":"'.$_POST[stay_to].'", "aum_to":"'.$_POST[aum_to].'"}';
// $curl_response = '';
 		if ($_POST[type] == 'Join' ) {
              if ($_POST[area] == 'Point' || $_POST[area] == 'In' ) {
                  $curl_post_data = '{"agent_ref": "'.$_POST[agent_ref].'",  
                        "guest_english" : "'.$_POST[guest_english].'",  
                        "guest_other" : "'.$_POST[guest_other].'", 
                        "phone": "'.$_POST[phone].'", 
                        "email": "'.$_POST[email].'",
                        "social_wechat" : "", 
                        "social_qq" : "",  
                        "social_wangwang" : "",  
                        "social_line" : "",  
                        "social_skype" : "",  
                        "social_whatapp" : "",  
                        "social_facebook" : "",   
                        "product" : "'.$_POST[product].'",  
                        "arrival_date": "'.$_POST[arrival_date].'",  
                        "arrival_time": "'.$_POST[arrival_time].'", 
                        "arrival_flight": "'.$_POST[arrival_flight].'", 
                        "arrival_visa": "'.$_POST[arrival_visa].'", 
                        "total_pax": "'.$_POST[total_pax].'",  
                        "to_place": "'.$_POST[to_place].'", 
                        "to_place_address": "'.trim($_POST[to_place_address]).'",  
                        "remark":"'.$_POST[remark].'"  
          
                      }';
              }
                  
        }
        if ($_POST[type] == 'Join') {
            if ($_POST[area] == 'Out') {
              $curl_post_data = '{"agent_ref": "'.$_POST[agent_ref].'",  
                        "guest_english": "'.$_POST[guest_english].'",  
                        "guest_other": "'.$_POST[guest_other].'", 
                        "phone": "'.$_POST[phone].'", 
                        "email": "'.$_POST[email].'",
                        "social_wechat" : "", 
                        "social_qq" : "",  
                        "social_wangwang" : "",  
                        "social_line" : "",  
                        "social_skype" : "",  
                        "social_whatapp" : "",  
                        "social_facebook" : "",   
                        "product": "'.$_POST[product].'",   
                        "departure_date": "'.$_POST[departure_date].'",  
                        "departure_time": "'.$_POST[departure_time].'", 
                        "departure_flight": "'.$_POST[departure_flight].'", 
                        "departure_terminal": "'.$_POST[departure_terminal].'", 
                        "total_pax": "'.$_POST[total_pax].'",                          
                        "pickup_place" : "'.$_POST[pickup_place].'", 
                        "pickup_place_address": "'.trim($_POST[pickup_place_address]).'",  
                        "service_time" : "'.$_POST[service_time].'", 
                        "remark" : "'.$_POST[remark].'"

              }';
            }
        }
        if ($_POST[type] == 'Private') {
            if ($_POST[area] == 'In') {
              $curl_post_data = '{"agent_ref": "'.$_POST[agent_ref].'",  
                        "guest_english": "'.$_POST[guest_english].'",  
                        "guest_other": "'.$_POST[guest_other].'", 
                        "phone": "'.$_POST[phone].'", 
                        "email": "'.$_POST[email].'",
                        "social_wechat" : "", 
                        "social_qq" : "",  
                        "social_wangwang" : "",  
                        "social_line" : "",  
                        "social_skype" : "",  
                        "social_whatapp" : "",  
                        "social_facebook" : "",   
                        "product": "'.$_POST[product].'",   
                        "arrival_date": "'.$_POST[arrival_date].'",  
                        "arrival_time": "'.$_POST[arrival_time].'", 
                        "arrival_flight": "'.$_POST[arrival_flight].'",                        
                        "total_pax": "'.$_POST[total_pax].'",
                        "to_place": "'.$_POST[to_place].'", 
                        "to_place_address": "'.trim($_POST[to_place_address]).'", 
                        "number_car": "'.$_POST[number_car].'", 
                        "remark": "'.$_POST[remark].'"  

              }';
            }
        }
         if ($_POST[type] == 'Private') {
            if ($_POST[area] == 'Out' ) {
              $curl_post_data = '{"agent_ref": "'.$_POST[agent_ref].'",  
                        "guest_english": "'.$_POST[guest_english].'",  
                        "guest_other": "'.$_POST[guest_other].'", 
                        "phone": "'.$_POST[phone].'", 
                        "email": "'.$_POST[email].'",
                        "social_wechat" : "", 
                        "social_qq" : "",  
                        "social_wangwang" : "",  
                        "social_line" : "",  
                        "social_skype" : "",  
                        "social_whatapp" : "",  
                        "social_facebook" : "",   
                        "product": "'.$_POST[product].'",   
                        "departure_date": "'.$_POST[departure_date].'",  
                        "departure_time": "'.$_POST[departure_time].'", 
                        "departure_flight" : "'.$_POST[departure_flight].'", 
                        "departure_terminal": "'.$_POST[departure_terminal].'",  
                        "total_pax": "'.$_POST[total_pax].'", 
                        "pickup_place": "'.$_POST[pickup_place].'", 
                        "pickup_place_address": "'.trim($_POST[pickup_place_address]).'",                       
                        "service_time": "'.$_POST[service_time].'",
                        "number_car": "'.$_POST[number_car].'", 
                       "remark":"'.$_POST[remark].'"  

              }';
            }
        }
        if ($_POST[type] == 'Point To Point') {
            
              $curl_post_data = '{    
                        "agent_ref": "'.$_POST[agent_ref].'",  
                        "guest_english": "'.$_POST[guest_english].'",  
                        "guest_other": "'.$_POST[guest_other].'", 
                        "phone": "'.$_POST[phone].'", 
                        "email": "'.$_POST[email].'",
                        "social_wechat" : "", 
                        "social_qq" : "",  
                        "social_wangwang" : "",  
                        "social_line" : "",  
                        "social_skype" : "",  
                        "social_whatapp" : "",  
                        "social_facebook" : "",   
                        "product": "'.$_POST[product].'", 
                        "service_date": "'.$_POST[service_date].'",  
                        "service_time":  "'.$_POST[service_time].'", 
                        "total_pax": "'.$_POST[total_pax].'",  
                        "number_car": "'.$_POST[number_car].'", 
                        "pickup_place": "'.$_POST[to_place].'", 
                        "to_place":"'.$_POST[to_place].'", 
                        "remark": "'.$_POST[remark].'"





                        
              }';
            
        }
        if ($_POST[type] == 'Private' && $_POST[area] == 'Service') {
            
               $curl_post_data = '{  "agent_ref": "'.$_POST[agent_ref].'",  
                        "guest_english": "'.$_POST[agent_ref].'",  
                        "guest_other": "'.$_POST[guest_english].'", 
                        "phone": "'.$_POST[phone].'", 
                        "email": "'.$_POST[email].'",
                        "social_wechat" : "", 
                        "social_qq" : "",  
                        "social_wangwang" : "",  
                        "social_line" : "",  
                        "social_skype" : "",  
                        "social_whatapp" : "",  
                        "social_facebook" : "",   
                        "product": "'.$_POST[product].'", 
                        "service_date": "'.$_POST[service_date].'",  
                        "service_time":  "'.$_POST[service_time].'", 
                        "total_pax": "'.$_POST[total_pax].'",  
                        "number_car": "'.$_POST[number_car].'", 
                        "pickup_place": "'.$_POST[pickup_place].'", 
                        "pickup_place_address": "'.trim($_POST[pickup_place_address]).'",  
                        "to_place" : "'.$_POST[to_place].'", 
                        "to_place_address": "'.trim($_POST[to_place_address]).'",  
                        "car_use_plan": "'.$_POST[remark].'"
                       





                        
              }';
            
        }
        if ($_POST[type] == 'Private' && $_POST[area] == 'Point') {
            
               $curl_post_data = '{ "agent_ref" : "'.$_POST[agent_ref].'",  
                        "guest_english" : "'.$_POST[guest_english].'",  
                        "guest_other" : "'.$_POST[guest_other].'", 
                        "phone": "'.$_POST[phone].'", 
                        "email": "'.$_POST[email].'", 
                        "product" : "'.$_POST[product].'",   
                        "service_date" : "'.$_POST[service_date].'",  
                        "service_time" :  "'.$_POST[service_time].'", 
                        "total_pax" : "'.$_POST[total_pax].'",  
                        "social_wechat" : "", 
                        "social_qq" : "",  
                        "social_wangwang" : "",  
                        "social_line" : "",  
                        "social_skype" : "",  
                        "social_whatapp" : "",  
                        "social_facebook" : "",   
                        "pickup_place": "'.$_POST[pickup_place].'", 
                        "pickup_place_address": "'.trim($_POST[pickup_place_address]).'",  
                        "to_place" : "'.$_POST[to_place].'", 
                        "to_place_address": "'.trim($_POST[to_place_address]).'", 
                        "number_car" : "'.$_POST[number_car].'", 
                       	"remark": "'.$_POST[remark].'"
                       





                        
              }';
            
        }
//$data = json_decode(file_get_contents('php://input'), true);
//print_r($data);
//$curl_post_data = json_decode(file_get_contents('php://input'), true);


echo $curl_post_data;
$headers = array();
// $headers[] = 'Content-Type: application/json';
// $headers[] = 'API-KEY: ea1b6d331a20b66041369a63251410d4ec748f27';
$url = "http://www.t-booking.com/apiv2/book/create";
//echo $url;
$api_key = 'ea1b6d331a20b66041369a63251410d4ec748f27';
$curl = curl_init();
curl_setopt($curl, CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json',
        'API-KEY: '.$api_key.''
    )
);
curl_setopt($curl, CURLOPT_ENCODING, 'gzip');
// curl_setopt($curl, CURLOPT_HTTPHEADER , array(
//      'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
// ));
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.6 (KHTML, like Gecko) Chrome/16.0.897.0 Safari/535.6");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_REFERER, $url);
curl_setopt($curl, CURLOPT_URL, $url);  

curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
$curl_response = curl_exec($curl);
//echo $curl_response;
curl_close($curl);

$message = iconv("incoming-charset", "utf-8", $curl_response);
$aaaa = json_decode($curl_response);
//print_r($aaaa);
//echo $aaaa;
// foreach ($aaaa as $data ) {
// 	$invoice = $data->invoice;
// 	//$row_data[] = $data;
// }
echo json_encode($aaaa);

?>