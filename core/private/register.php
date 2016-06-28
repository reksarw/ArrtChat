<?php
require "../ArrtChat.php";

if ( ! isset ( $_POST['submitRegister'])){
	redirect();
}

$nickname = filter_html($_POST['nama_lengkap']);
$username = filter_html($_POST['nama_pengguna']);
$email = filter_email($_POST['email']);
$password = filter_html(md5($_POST['password']));
$jk = ""; $gambar = "";

$sql = $driver->prepare("SELECT * FROM user WHERE username = :username");
$sql->BindParam(":username",$username);
$sql->execute();

if(!$email){
$_SESSION['_eNotValid'] = $email;
redirect();
}else{
if($sql->rowCount() > 0){
$_SESSION['_username'] = $username;
redirect();
}else{
	$query = $driver->prepare("SELECT * FROM user WHERE email = :email_user");
	$query->BindParam(":email_user",$email);
	$query->execute();
	
	$data = $query->fetch();
	
	if($data['email'] == $email){
		$_SESSION['_email'] = $email;
		redirect();
	}else{
		switch($_POST['jenis_kelamin']){
			case "Laki-Laki":
			$jk .= "L";
			$gambar .= "default_male.png";
			break;
			
			case "Perempuan":
			$jk .= "P";
			$gambar .= "default_female.png";
			break;
		}
		$data = array(
				'nickname' => $nickname,
				'username' => $username,
				'email' => $email,
				'password' => $password,
				'jenis_kelamin' => $jk,
				'gambar' => $gambar,
				'terdaftar' => $tanggal_jam,
				'online' => 'N',
				'terakhir_login' => $tanggal_jam
			);
			
			$as = $driver->prepare("UPDATE user SET online = 'Y' WHERE username = :username");
			$as->BindParam(":username",$username);
			$as->execute();
			
			$driver->insert_tabel("user",$data);
				
			$_SESSION['member_chat'] = $username;
			redirect("user");
		}
	}
}