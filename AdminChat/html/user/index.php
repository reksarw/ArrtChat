<?php
$u= $_REQUEST["u"];
switch ($u) {
	
		case 'input':
				
				$nickname 	= $_POST['nickname'];
				$username 	= $_POST['username'];
			    $email	 	= $_POST['email'];
			    $jk 		= $_POST['jk'];
			   
			    $password 	= $_POST['password'];
			    $password2 	= $_POST['password1'];
				$nama_gam	= $_FILES['foto']['name'];
				if ($password == $password2) {
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
												 document.location="?arrt=user";</script>';}
				else{																				
				$aksi = move_uploaded_file($source,$direktori);
				if($aksi){
					user::inputuser($nickname, $username, $email, $jk, $pass, $direktori);
				echo "<script type=\"text/javascript\">alert(' Data berhasil disimpan');document.location='?arrt=user';</script>";
				}}}
				else{
				user::inputuser($nickname, $username, $email, $jk, $pass, $direktori);
				echo "<script type=\"text/javascript\">alert(' Data berhasil disimpan');document.location='?arrt=user';</script>";
			}
			}	else{
				echo "<script type=\"text/javascript\">alert(' Confirm Password Salah '); document.location='?arrt=user';</script>";}
				break;
						
	case 'edit':
				$id 			= $_POST['id'];
				$nickname 		= $_POST['nickname'];
				$username 		= $_POST['username'];
			    $email	 		= $_POST['email'];
			    $password 		= $_POST['password'];
			    $password1 		= $_POST['password1'];
			    $jk 			= $_POST['jk'];
			    $nama_gam=$_FILES['foto']['name'];
				
				if ($password == $password1) {
				if(!empty($nama_gam)){	
				$pengacak1 		= "!@#$%^&*NANANG&^%$#@!";
				$pass = sha1 (md5($pengacak1.md5($password).$pengacak1));
				$pengacak		="@&(!>>?!_*&^TAUFIK,.>>!!!I!##&*-+";
				$file_name 		=  md5($pengacak."-289$#%!*(I)!^BH#^!!(%!^%".($nama_gam)) .$nama_gam ;
							$direktori = "file/$file_name";
							$record= user::data($id);
							$file_size = $_FILES['foto']['size']; 
							$file_type = $_FILES['foto']['type']; 
							$source = $_FILES['foto']['tmp_name']; 
							unlink($record['gambar']);
							if  ($file_type  !=  "image/gif"  &&  $file_type  !=  "image/jpg"  && $file_type != "image/jpeg" && $file_type != "image/png") { 
																											
							echo '<script language="javascript"> alert(" File Yang Di izinkan Hanya jpg,jpeg,png,gif");
							document.location="?arrt=user";</script>';}
							else{																				
								$aksi = move_uploaded_file($source,$direktori);
									if($aksi){
								
				user::edituser($id, $nickname, $username, $email, $pass, $jk, $direktori);
				echo "<script type=\"text/javascript\"> alert ('Data berhasil di edit');document.location='?arrt=user';</script>";
								}}}
									else{
						
				user::edituser1($id, $nickname, $username, $email, $pass, $jk, $direktori);
				echo "<script type=\"text/javascript\">alert ('Data berhasil di edit');document.location='?arrt=user';</script>";
			}}
									else{
				echo "<script type=\"text/javascript\">alert(' Confirm Password Salah '); document.location='?arrt=user';</script>";}
				break;																
																								
				   	
	case 'd' :
		$id = $_GET['id'];
		$record = user::data($id);
		unlink($record['gambar']);
		$record1 = user::hapus($id);
		echo "<script type=\"text/javascript\">document.location='?arrt=user';</script>";
	break;
	case 'e' :
		$id = $_GET['id'];
		$record = user::data($id);
	require 'e.php';
	break;		
	case 'i' :
		require 'i.php';
	break;
	
	case 'v' :
		$id = $_GET['id'];
		$record = user::data($id);
		require 'd.php';
	break;
	
	default :
	
		
		require 'v.php';
	break;
	
	}
?>
