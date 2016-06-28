<?php
include "../ArrtChat.php";

if(!isset($_SESSION['member_chat'])){
exit("Access Denied");
}

$query = $driver->prepare("SELECT * FROM online WHERE session_id = '$session_id'");
$query->execute();

$cek = $query->fetch(PDO::FETCH_NUM);

if($cek == 0){
	$sql = $driver->prepare("SELECT * FROM user WHERE username = :user");
	$sql->BindParam(":user",$_SESSION['member_chat']);
	$sql->execute();
	
	$result = $sql->fetch();
	
	$data = array(
			'session_id' => $session_id,
			'username' => $_SESSION['member_chat'],
			'gambar' => $result['gambar'],
			'room' => $_SESSION['user_room']
		);

	$driver->insert_tabel("online",$data);
}

/* Path : ./core/private/in.php */