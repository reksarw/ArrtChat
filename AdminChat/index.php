<?php
error_reporting(0);
include "php/koneksi/index.php";
include "php/class/cl.php";

$arrt = $_REQUEST["arrt"];
switch ($arrt)	{

default:
	require 'html/login/fl.php';
break;

case 'ck':
	require "php/class/ck.php";
break;

case 'lost':
	require "html/lost/index.php";
break;

}
?>
