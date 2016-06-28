<?php
require "../ArrtChat.php";

$nama = $_SESSION['member_chat'];
$pesan = htmlentities(trim($_POST['pesan']));
$room = $_SESSION['user_room'];
$waktu = date('Y-m-d H:i:s');

$banned_words = array_map('trim',explode(',',file_get_contents('../../tmp/banned_words.txt')));

if(!banned_words($pesan,$banned_words)){
	$pesan = str_replace($banned_words,"arrtchat",$pesan);
}

$pesan = nl2br($pesan);

$sql = $driver->prepare("INSERT INTO message (username,pesan,room_name,waktu) VALUES (:nama,:pesan,:room,:waktu)");
$sql->BindParam(":nama",$nama);
$sql->BindParam(":pesan",$pesan);
$sql->BindParam(":room",$room);
$sql->BindParam(":waktu",$waktu);
$sql->execute();

if($sql->rowCount() == 1){
	print "terkirim";
}else{
	print "gagal";
}	

/** File : ./core/private/push_msgs.php **/