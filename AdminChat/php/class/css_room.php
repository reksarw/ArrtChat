<?php
	class room{
		
		public static function inputroom
		($proom, $troom, $rpass, $pemroom, $aroom, $rpop, $direktori, $nameroom){
			
		$sql1="INSERT INTO `chatroom`(`room_id`, `user_create`, `room_name`, `room_type`, `room_password`, `room_image`, `room_date`, 
		`room_active`, `room_popular`)
		VALUES
		( '', '$proom','$nameroom', '$troom', '$rpass', '$direktori', NOW(),'$aroom','$rpop')";
		mysql_query($sql1) or die (mysql_error());
		
		}
			public static function editroom ($id,$proom, $troom, $rpass, $pemroom, $aroom, $rpop, $direktori, $nameroom){
			$sql1="UPDATE `chatroom` SET 
			`user_create`='$proom',
			`room_name`='$nameroom',
			`room_type`='$troom',
			`room_password`='$rpass',
			`room_active`='$aroom',
			`room_popular`='$rpop',
			`room_image`='$direktori'
			WHERE `room_id`='$id'";
			mysql_query($sql1) or die("edit data menu error :".mysql_error());
			
		}
				public static function editroom1 ($id,$proom, $troom, $rpass, $pemroom, $aroom, $rpop, $direktori, $nameroom){
			$sql1="UPDATE `chatroom` SET 
			`user_create`='$proom',
			`room_name`='$nameroom',
			`room_type`='$troom',
			`room_password`='$rpass',
			`room_active`='$aroom',
			`room_popular`='$rpop'
			WHERE `room_id`='$id'";
			mysql_query($sql1) or die("edit data menu error :".mysql_error());
			
		}
			public static function hapus ($id){
			$sql   	 	= "DELETE FROM chatroom WHERE room_id='$id'";
			
			mysql_query($sql);
		} 
		public static function data($id){
		$sql				="SELECT * FROM chatroom WHERE room_id='$id'";
		$recordset	= mysql_query($sql);
		$record		= mysql_fetch_assoc($recordset);
		return	$record;
		
		}	
		public function dataroom($h){
			
			$sql        = "SELECT * FROM `chatroom`";
			$recordset  = mysql_query($sql);
        while ($record=  mysql_fetch_array($recordset)){
            $array[]=$record;
        }
        return $array;
		}
		}
?>
