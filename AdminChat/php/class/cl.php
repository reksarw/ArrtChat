<?php
class login{
	public function getDetailLogin($id){
		$sql = "SELECT * FROM admin where id='$id'";
		$recordset = mysql_query($sql) or die (mysql_error());
		$record = mysql_fetch_array($recordset);
		return $record;
	}
	
	public function cekLogin($username,$password){
		//sql untuk mengecek inputan dengan database
		$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $hasil = mysql_query($sql) or die (mysql_error());
        $hasil = mysql_fetch_assoc($hasil);
        return $hasil;
	}
}

?>
