<?php
require "../ArrtChat.php";

if(!isset($_SESSION['member_chat'])){
	exit("Access Denied");
}

$room = $_SESSION['user_room'];

$data = array("room_name" => $room );

return $driver->delete_tabel("message",$data);