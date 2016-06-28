<?php
error_reporting(0);
include '../koneksi/index.php';
include 'cl.php';

session_start();
$username = $_POST['username'];
$password1 = $_POST['password'];

				
if ($_POST) {
	$password = md5($password1);
 	$hasil = login::cekLogin($username, $password);
   
	$id_admin = $hasil[id];
     if ($hasil[username] == $username && $hasil[password] == $password) {
		session_start();
		$_SESSION['login'] = True;
		$_SESSION['nickname'] = $hasil[nickname];
		$_SESSION['id'] = $hasil[id];
		
		$_SESSION['username'] = $hasil[username];
		$_SESSION['password'] = $hasil[password];
		$_SESSION['email'] = $hasil[email];
		$_SESSION['email'] = $hasil[email];
         echo "<script type='text/javascript'>alert('Selamat Datang  $_SESSION[nickname]');document.location='../../html/'</script>";
        
    } 
	else {
      echo "<script type='text/javascript'>alert('Login Gagal, Username Dan Password Tidak Valid');document.location='../../'</script>";
    }
}
?>

