<?php

$roomName = $_REQUEST['nama_room'];

$sql = $driver->prepare("SELECT * FROM chatroom WHERE room_name = '$roomName'");
$sql->execute();

$data = $sql->fetch();

if(preg_match("/-/",$roomName)){
	$c = str_replace("-"," ",$roomName);
	if($data['room_name'] == $c){
		echo "404";
	}else{
		echo $c;
		$_SESSION['user_room'] = $c;
	}
}else{
	if(strtolower($data['room_name']) == strtolower($roomName)){
		echo $data['room_name'];
		$_SESSION['user_room'] = $data['room_name'];
	}else{
		echo "404";
	}
}
/** File : ./common/routes/title_room.php **/