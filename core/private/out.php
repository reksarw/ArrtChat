<?php
include "../ArrtChat.php";

$sql = $driver->prepare("DELETE FROM online WHERE session_id = '$session_id'");
$sql->execute();

/* Path : ./core/private/out.php */