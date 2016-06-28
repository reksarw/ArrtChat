
<?php
error_reporting(0);
$c = $_GET['c'];
switch($c){
	
	default:
		require 'i.php';
	break;
		
	case 'i':	
		require 'i.php';
	break;
		
	case 'update_pass':
		$ids=$_POST['ids'];
		require 'e.php';
	break;
	
	case 'update_user':
		require 'e.php';
	break;
	
	case 'submit_update_pass':
		$id=$_POST['id'];
		$password1				= $_POST['password1'];
		$password2				= $_POST['password2'];	
		 
		 	if ($password1 == $password2) {
				$password = md5($password1);
	  
		 mysql_query("UPDATE `admin` SET `password`='$password' WHERE `id`='$id'") or die(mysql_error());
		 
			echo "<script type=\"text/javascript\">alert('Password Berhasil Diubah');document.location='?arrt';</script>";
		}
		else{
				echo "<script type=\"text/javascript\">alert('salah pass');document.location='../adm';</script>";
			}
	break;
	
	case 'submit_update_user':
		$user=$_POST['username'];
		mysql_query("UPDATE blt_resu set resu_username='$user' where resu_id='$_GET[id]'") or die(mysql_error());
			echo "<script type=\"text/javascript\">alert('Username Berhasil Diubah');document.location='?im2p';</script>";
	break;
}
?>
