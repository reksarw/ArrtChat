<?php

error_reporting(0);
include "../php/class/css_user.php";
include "../php/class/css_room.php";
include "../php/class/css_massage.php";
include "../php/class/css_login.php";

include "../php/koneksi/index.php";
session_start();
if (!$_SESSION['login']){
 echo"<script type=\"text/javascript\">alert('Anda Harus Login Terlebih Dahulu');document.location='../';</script>";
exit;
}

		$arrt = $_REQUEST['arrt'];
		switch ($arrt){
			
			default :
					require 'view/s.php';
					require 'view/h.php';
					require 'view/m.php';
					require 'view/f.php';
					require 'view/a.php';
			break;
			
			case 'user':
					require 'view/s.php';
					require 'view/h.php';					
					require 'user/index.php';
					require 'view/a.php';
			break;
			case 'room':
					require 'view/s.php';
					require 'view/h.php';					
					require 'chatroom/index.php';
					require 'view/a.php';
			break;
			case 'message':
					require 'view/s.php';
					require 'view/h.php';					
					require 'massage/index.php';
					require 'view/a.php';
			break;
			case 'online':
					require 'view/s.php';
					require 'view/h.php';					
					require 'online/index.php';
					require 'view/a.php';
			break;
			case 'backup':
					require 'view/s.php';
					require 'view/h.php';					
					require 'backup/index.php';
					require 'view/a.php';
			break;
			case 'restore':
					require 'view/s.php';
					require 'view/h.php';					
					require 'backup/restore.php';
					require 'view/a.php';
			break;
			
			case'lockscreen':	
			require 'lockscreen/index.php';
			
			break;
	
			case 'logout':
					session_start();	
					unset($_SESSION['login']);
					session_destroy();
					echo "<script type=\"text/javascript\">document.location='../';</script>";			
			break;
		
			}

?>

