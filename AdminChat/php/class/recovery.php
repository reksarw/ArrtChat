<?php
error_reporting(0);
include "../koneksi/index.php";
include "css_recovery.php";

	
	$username= $_POST['username'];
	$email= $_POST['email'];
	$hasil= recovery::lupa_pass($username, $email);
	if(hasil){
		if($hasil['username'] == $username && $hasil['email']==$email){
		
		$_SESSION['login']=true;
		echo "<script type=\"text/javascript\">alert('Akun diketahui');document.location='../../?arrt=lost&c=update_pass&id=".$hasil['id']."';</script>";
		}
	
	
	else {
		echo "<script type=\"text/javascript\">alert('Akun tidak ada');document.location='../../?arrt=lost';</script>";
	}
}
?>
