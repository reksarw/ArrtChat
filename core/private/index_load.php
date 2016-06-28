<?php
require "../ArrtChat.php";

$query = $driver->prepare("UPDATE user SET online = 'N' WHERE username = :this_user");
$query->BindParam(":this_user",$_SESSION['member_chat']);
$query->execute();

if($query){
	print "1";
}else{
	print "0";
}

@session_destroy();