<?php
error_reporting(0);
require "../core/ArrtChat.php";

switch(strtolower($_REQUEST['action'])){

case "user":
include "routes/user.php";
break;

case "edit":
include "routes/edit_profile.php";
break;

case "create":
include "routes/create_room.php";
break;

case "my_room":
include "routes/my_room.php";
break;

case "logout":
$as = $driver->prepare("UPDATE user SET online = 'N' WHERE username = :session_user");
$as->BindParam(":session_user",$_SESSION['member_chat']);
$as->execute();
session_destroy();
redirect();
break;

default:
$x = explode(":",$jam);
if ($x[0] >= 18){
include "night.php";
}else if($x[0] >= 6){
include "day.php";
}else{
include "night.php";
}
break;

}
?>