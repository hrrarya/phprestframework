<?php 


 	if($method == 'GET'){
 		if($id){
 			$data = $db::query("SELECT * FROM $tablename WHERE id=:id", array(':id'=> $id));

 			if($data){
 				echo json_encode($data);
 			}else{
 				echo json_encode(array('message'=>"no data"));
 			}
 		}else{
 			$data = $db::query("SELECT * FROM $tablename");
 			
 			if($data){
 				echo json_encode($data);
 			}else{
 				echo json_encode(array('message'=>"no data"));
 			}
 		}
 	}