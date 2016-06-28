<?php

require "../ArrtChat.php";

if ( ! isset( $_POST['submitLogin'] ) ){
	redirect();
}

$username = filter_html($_POST['username']);
$password = filter_html(md5($_POST['password']));

$query = $driver->prepare("SELECT * FROM user WHERE username = :username OR email = :username");
$query->BindParam(":username",$username);
$query->execute();

$data = $query->fetch();

if($data['online'] == "Y"){
	$_SESSION['user_online'] = $username;
	
	redirect();
}else{
	if($query->rowCount() > 0){
		if($data['password'] != $password){
			$_SESSION['password_404'] = "Pass Salah";
			redirect();
		}else{
			$as = $driver->prepare("UPDATE user SET online = 'Y' WHERE username = :username");
			$as->BindParam(":username",$username);
			$as->execute();
			
			$_SESSION['member_chat'] = $data['username'];
			setcookie("member_chat",md5($username),time()+600);
			redirect("user");
		}
	}else{
		$_SESSION['user_404'] = $username;
		redirect();
	}
}
?>