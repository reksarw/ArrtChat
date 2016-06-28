<?php
require "../ArrtChat.php";

if(!isset($_SESSION['member_chat'])){
exit("Anda Belum Login");
}

if(!$_GET OR !$_REQUEST){
exit("Access Denied");
}

$request = $_GET['room_id'];

$table = "chatroom";
$where = array( 'room_id' => $request , 'user_create' => $_SESSION['member_chat'] );

$query = $driver->prepare("SELECT * FROM chatroom WHERE room_id = :req");
$query->BindParam(":req",$request);
$query->execute();
$rec = $query->fetch();

$driver->delete_tabel($table,$where);

$_SESSION['hapus_room'] = $rec['room_name'];
redirect("user");