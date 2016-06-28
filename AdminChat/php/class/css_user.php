<?php
	class user{
		
		public static function inputuser
		($nickname, $username, $email, $jk, $pass, $direktori){
			
		$sql1="INSERT INTO `user`(`user_id`, `nickname`, `username`, `email`, `password`, `jenis_kelamin`, `gambar`, `terdaftar`, `online`, `terakhir_login`)
		VALUES 
		( '', '$nickname', '$username', '$email', '$pass', '$jk', '$direktori',NOW(),'N','')";
		mysql_query($sql1) or die (mysql_error());
		
		}
			public static function edituser ($id, $nickname, $username, $email, $pass, $jk, $direktori){
			$sql1="UPDATE `user` SET 
			`nickname`='$nickname',
			`username`='$username',
			`email`='$email',
			`password`='$pass',
			`jenis_kelamin`='$jk',
			`gambar`='$direktori'
			WHERE `user_id`='$id'";
			mysql_query($sql1) or die("edit data menu error :".mysql_error());
			
		}
			public static function edituser1 ($id, $nickname, $username, $email, $pass, $jk, $direktori){
			$sql1="UPDATE `user` SET 
			`nickname`='$nickname',
			`username`='$username',
			`email`='$email',
			`password`='$pass',
			`jenis_kelamin`='$jk'
			WHERE `user_id`='$id'";
			mysql_query($sql1) or die("edit data menu error :".mysql_error());
			
		}		 		
			public static function hapus ($id){
			$sql   	 	= "DELETE FROM user WHERE user_id='$id'";
			
			mysql_query($sql);
		} 
		public static function data($id){
		$sql				="SELECT * FROM user WHERE user_id='$id'";
		$recordset	= mysql_query($sql);
		$record		= mysql_fetch_assoc($recordset);
		return	$record;
		
		}	
		public function datauser($h){
			
			$sql        = "SELECT * FROM `user`";
			$recordset  = mysql_query($sql);
        while ($record=  mysql_fetch_array($recordset)){
            $array[]=$record;
        }
        return $array;
		}
		}
?>
