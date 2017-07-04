<?php
foreach($resault as $row) {
        $data[] = $row;
			//echo $row->id;

      }
      echo json_encode($data);
?>