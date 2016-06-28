<?php
$o= $_REQUEST["o"];
switch ($o) {
	
	
	case 'd' :
		$id = $_GET['id'];
		$record = online::hapus($id);
		echo "<script type=\"text/javascript\">document.location='?arrt=online';</script>";
	break;
	case 'e' :
		$id = $_GET['id'];
		$record = online::data($id);
	require 'e.php';
	break;		
	case 'i' :
		require 'i.php';
	break;
	
	case 'v' :
		$id = $_GET['id'];
		$record = online::data($id);
		require 'd.php';
	break;
	
	default :
	
		
		require 'v.php';
	break;
	
	}
?>
