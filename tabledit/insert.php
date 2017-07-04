<?php 

require_once("includes/class.mysql.php");



	
	if($_GET[action]=='type'){
		if($_POST[name_type]!=""){
			$db = New DB();
			$db->connectdb('admin_dddtrip','admin_dddtrip','252631@dotdotdottrip');
			$current_date = $current = date('Y-m-d h:i:s');
			$type[s_eng] = $_POST[name_type];
			$type[d_last_update] = $current_date;
			//$type[s_detail] = $_POST[detail];
			
			mysql_query("SET NAMES utf8"); 
			mysql_query("SET character_set_results=utf-8"); 
			$save_type = $db->add_db('ap_language',$type); 
			echo $save_type;
		}else{
			echo 0;
		}
		

	}
	
	if($_GET[action]=='query_type'){
		$db = New DB();
		$db->connectdb('admin_dddtrip','admin_dddtrip','252631@dotdotdottrip');
		mysql_query("SET NAMES utf8"); 
		mysql_query("SET character_set_results=utf-8"); 
		$res[other] = $db->select_query("select * from ap_language ORDER BY i_id DESC LIMIT 1  ");
		  while($arr[other] = $db->fetch($res[other])) {
		  	 $lab_meet1[] = $arr[other];
		  }
		  echo json_encode($lab_meet1);
	}


	
?>