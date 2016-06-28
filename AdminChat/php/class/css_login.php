<?php
	class online{
		

		public static function hapus ($id){
			$sql   	 	= "DELETE FROM online WHERE id='$id'";
			
			mysql_query($sql);
		} 
		public static function data($id){
		$sql				="SELECT * FROM online WHERE id='$id'";
		$recordset	= mysql_query($sql);
		$record		= mysql_fetch_assoc($recordset);
		return	$record;
		
		}	
		public function dataonline($h){
			
			$sql        = "SELECT * FROM `online`";
			$recordset  = mysql_query($sql);
        while ($record=  mysql_fetch_array($recordset)){
            $array[]=$record;
        }
        return $array;
		}
		}
?>
