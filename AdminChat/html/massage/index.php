<?php
$m= $_REQUEST["m"];
switch ($m) {
	
	
	case 'd' :
		$id = $_GET['id'];
		$record = massage::hapus($id);
		echo "<script type=\"text/javascript\">document.location='?arrt=message';</script>";
	break;
	case 'e' :
		$id = $_GET['id'];
		$record = massage::data($id);
	require 'e.php';
	break;		
	case 'i' :
		require 'i.php';
	break;
	
	case 'v' :
		$id = $_GET['id'];
		$record = massage::data($id);
		require 'd.php';
	break;
	
	default :
	
		
		require 'v.php';
	break;
	
	}
?>
