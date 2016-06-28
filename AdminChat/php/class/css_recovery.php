<?php
class recovery{
	public static function lupa_pass($username, $email){
		$sql 		= "SELECT * FROM admin WHERE email = '$email' and username = '$username'";
		$query 		= mysql_query($sql) or die (mysql_error());
		$hasil 	= mysql_fetch_array($query);
		
		return $hasil;
	}
	
	
	
}

?>
