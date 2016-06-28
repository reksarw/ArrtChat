<?php
	class massage{
		

		public static function hapus ($id){
			$sql   	 	= "DELETE FROM message WHERE user_id='$id'";
			
			mysql_query($sql);
		} 
		public static function data($id){
		$sql				="SELECT * FROM message WHERE user_id='$id'";
		$recordset	= mysql_query($sql);
		$record		= mysql_fetch_assoc($recordset);
		return	$record;
		
		}	
		public function datamassage($h){
			
			$sql        = "SELECT * FROM `message`";
			$recordset  = mysql_query($sql);
        while ($record=  mysql_fetch_array($recordset)){
            $array[]=$record;
        }
        return $array;
		}
		}
?>
