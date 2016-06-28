<?php
error_reporting(0);
if(session_id() == FALSE)
	session_start();

require __DIR__."/Driver.php";

require __DIR__."/Config.php";
require __DIR__."/Function.php";
require __DIR__."/Helper.php";
extract($config);

require __DIR__."/Autoload.php";

$driver = new Driver();