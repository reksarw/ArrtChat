<?php
$r= $_REQUEST["r"];
switch ($r) {
	
		case 'input':
				
				$proom 		= $_POST['proom'];
				$nameroom 	= $_POST['nameroom'];
				
				$troom 		= $_POST['troom'];
			    $rpass	 	= $_POST['rpass'];
			    $rpass1 	= $_POST['rpass1'];
			    $pemroom 	= $_POST['pemroom'];
			    $aroom 		= $_POST['aroom'];
				$rpop 		= $_POST['rpop'];
				$nama_gam	= $_FILES['foto']['name'];
				if ($rpass == $rpass1) {
				$pengacak1 		= "!@#$%^&*NANANG&^%$#@!";
				//tanya jack pengacaknya
				$pass = sha1 (md5($pengacak1.md5($password).$pengacak1));
				if(!empty($nama_gam)){
				$file_size 		= $_FILES['foto']['size']; 
				$file_type 		= $_FILES['foto']['type']; 
				$source 		= $_FILES['foto']['tmp_name']; 
				
				$pengacak		="@&(!>>?!_*&^TAUFIK,.>>!!!I!##&*-+";
				$file_name 		=  md5($pengacak."-289$#%!*(I)!^BH#^!!(%!^%".($nama_gam)).$nama_gam ;
				// letak Gambar Tanya juga direktori bro
				$direktori 		= "file/$file_name";
				if  ($file_type  !=  "image/gif"  &&  $file_type  !=  "image/jpg"  && $file_type != "image/jpeg" && $file_type != "image/png") { 											
				echo '<script language="javascript"> alert(" File Yang Di izinkan Hanya jpg,jpeg,png,gif");
												 document.location="?arrt=room";</script>';}
				else{																				
				$aksi = move_uploaded_file($source,$direktori);
				if($aksi){
					room::inputroom($proom, $troom, $rpass, $pemroom, $aroom, $rpop, $direktori, $nameroom);
				echo "<script type=\"text/javascript\">alert(' Data berhasil disimpan');document.location='?arrt=room';</script>";
				}}}
				else{
					room::inputroom($proom, $troom, $rpass, $pemroom, $aroom, $rpop, $direktori, $nameroom);
				echo "<script type=\"text/javascript\">alert(' Data berhasil disimpan');document.location='?arrt=room';</script>";
			}
			}	else{
				echo "<script type=\"text/javascript\">alert(' Confirm Password Salah '); document.location='?arrt=room';</script>";}
				break;
						
	case 'edit':
				$id 			= $_POST['id'];
				$proom 		= $_POST['proom'];
				$nameroom 	= $_POST['nameroom'];
				$troom 		= $_POST['troom'];
			    $rpass	 	= $_POST['rpass'];
			    $rpass1 	= $_POST['rpass1'];
			    $pemroom 	= $_POST['pemroom'];
			    $aroom 		= $_POST['aroom'];
				$rpop 		= $_POST['rpop'];
			    $nama_gam=$_FILES['foto']['name'];
				
				if ($rpass == $rpass1) {
				if(!empty($nama_gam)){	
				$pengacak1 		= "!@#$%^&*NANANG&^%$#@!";
				$pass = sha1 (md5($pengacak1.md5($password).$pengacak1));
				$pengacak		="@&(!>>?!_*&^TAUFIK,.>>!!!I!##&*-+";
				$file_name 		=  md5($pengacak."-289$#%!*(I)!^BH#^!!(%!^%".($nama_gam)) .$nama_gam ;
							$direktori = "file/$file_name";
							$record= room::data($id);
							$file_size = $_FILES['foto']['size']; 
							$file_type = $_FILES['foto']['type']; 
							$source = $_FILES['foto']['tmp_name']; 
							unlink($record['gambar']);
							if  ($file_type  !=  "image/gif"  &&  $file_type  !=  "image/jpg"  && $file_type != "image/jpeg" && $file_type != "image/png") { 
																											
							echo '<script language="javascript"> alert(" File Yang Di izinkan Hanya jpg,jpeg,png,gif");
							document.location="?arrt=room";</script>';}
							else{																				
								$aksi = move_uploaded_file($source,$direktori);
									if($aksi){
								
					room::editroom($id, $proom, $troom, $rpass, $pemroom, $aroom, $rpop, $direktori, $nameroom);
				echo "<script type=\"text/javascript\"> alert ('Data berhasil di edit');document.location='?arrt=room';</script>";
								}}}
									else{
						
					room::editroom1($id, $proom, $troom, $rpass, $pemroom, $aroom, $rpop, $direktori, $nameroom);
				echo "<script type=\"text/javascript\">alert ('Data berhasil di edit');document.location='?arrt=room';</script>";
			}}
									else{
				echo "<script type=\"text/javascript\">alert(' Confirm Password Salah '); document.location='?arrt=room';</script>";}
				break;																
																								
				  
	case 'd' :
		$id = $_GET['id'];
		$record = room::data($id);
		unlink($record['room_image']);
		$record1 = room::hapus($id);
		echo "<script type=\"text/javascript\">document.location='?arrt=room';</script>";
	break;
	case 'e' :
		$id = $_GET['id'];
		$record = room::data($id);
	require 'e.php';
	break;		
	case 'i' :
		require 'i.php';
	break;
	
	case 'v' :
		$id = $_GET['id'];
		$record = room::data($id);
		require 'd.php';
	break;
	
	default :
	
		require 'v.php';
	break;
	
	}
?>
