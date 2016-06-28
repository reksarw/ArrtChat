<?php
require "../ArrtChat.php";

if(!$_POST){
exit("Access Denied");
}

$errno = false;
$folder = "../../images/";
$file_type  = array('jpg','jpeg','png');
$max_size   = 10000000; // 10MB
$pesan = null;

if(isset($_POST['formEdit'])){
	$nama = filter_html($_POST['nickname']);
	$email = filter_email($_POST['email']);
	$file_name  = $_FILES['profileImage']['name'];
    $file_size  = $_FILES['profileImage']['size'];
	
	$explode    = explode('.',$file_name);
    $extensi    = $explode[count($explode)-1];
	
	if(!in_array($extensi,$file_type)){
        $errno   = true;
        $pesan .= 'Tipe File yang anda Upload tidak sesuai';
    }
	
	if($file_name == null){
		$helper = null;
	}else{
		$helper = md5_helper($file_name).".".$extensi;
	}
	
	if($file_size > $max_size){
        $errno   = true;
        $pesan .= 'Ukuran File yang anda Upload tidak boleh Lebih dari <strong>10 MB</strong>';
    }
	
	 if($errno == true){
        $_SESSION['error'] = $pesan;
		
		redirect("user");
    }else{
		if(!$email){
			echo "Format email salah";
		}else{
			if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $folder.$helper)){
				$query = $driver->prepare("UPDATE user SET nickname = :nickname , email = :email , gambar = :gambar WHERE username = :user ");
				$query->BindParam(":nickname",$nama);
				$query->BindParam(":email",$email);
				$query->BindParam(":gambar",$helper);
				$query->BindParam(":user",$_SESSION['member_chat']);
				$query->execute();
				
				$_SESSION['profile_update'] = "Session GAMBAR";
				unset($_SESSION['_gambar']);
				redirect("user");
			}else{
				$query = $driver->prepare("UPDATE user SET nickname = :nickname , email = :email , gambar = :gambar WHERE username = :user ");
				$query->BindParam(":nickname",$nama);
				$query->BindParam(":email",$email);
				$query->BindParam(":gambar",$_SESSION['_gambar']);
				$query->BindParam(":user",$_SESSION['member_chat']);
				$query->execute();
				
				$_SESSION['profile_update'] = "Session GAMBAR";
				unset($_SESSION['_gambar']);
				redirect("user");
			}
		}
	}
}