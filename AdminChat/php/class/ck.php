<?php
error_reporting(0);
session_start();
//mendapatkan inputan
$username = $_POST['username'];
$password = md5($_POST['password']);

//deklarasi untuk pengacak password
				$pengacak1 		= "!@#$%^&*NANANG&^%$#@!";
				$pass = sha1 (md5($pengacak1.md5($password).$pengacak1));
if ($_POST) {
   $hasil = login::cekLogin($username, $password);
    if ($hasil[username] == $username && $hasil[password] == $password) {
		session_start();
		$_SESSION['login'] = True;
		$_SESSION['nickname'] = $hasil[nickname];
		$_SESSION['id'] = $hasil[id];
		
		$_SESSION['username'] = $hasil[username];
		$_SESSION['password'] = $hasil[password];
		$_SESSION['email'] = $hasil[email];
		
		
        
        
         echo "<script type='text/javascript'>alert('Selamat Datang  $_SESSION[nickname]');document.location='html/'</script>";
        
     
    } 
	else {
      echo "<script type='text/javascript'>alert('Login Gagal, Username Dan Password Tidak Valid');document.location='./'</script>";
    }
}
?>
