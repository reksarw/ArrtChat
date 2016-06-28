<?php
if(!$_POST){
exit("Access Denied");
}

require "../ArrtChat.php";

$errno = false;
$folder = "../../images/";
$file_type  = array('jpg','jpeg','png');
$max_size   = 10000000; // 10MB
$pesan = "";

if(isset($_POST['buttonCreate'])){
	$roomName = $_POST['roomName'];
	$file_name  = $_FILES['roomImage']['name'];
    $file_size  = $_FILES['roomImage']['size'];
	
	$explode    = explode('.',$file_name);
    $extensi    = $explode[count($explode)-1];
	
	if(!in_array($extensi,$file_type)){
        $errno   = true;
        $pesan .= 'File Name : <b>'.$file_name.'</b> - Type file yang anda upload tidak sesuai<br />';
    }
	
	if($file_size > $max_size){
        $errno   = true;
        $pesan .= 'File Name : <b>'.$file_name.'</b> - Ukuran file melebihi batas maximum<br />';
    }
    //check ukuran file apakah sudah sesuai
	
	$helper = md5_helper($file_name).".".$extensi;
	
    if($errno == true){
        echo '<div id="eror">'.$pesan.'</div>';
    }else{
		$query = $driver->prepare("SELECT * FROM chatroom WHERE room_name = :room");
		$query->BindParam(":room",$roomName);
		$query->execute();
		
		$result = $query->fetch();
		
		if(strtolower($result['room_name']) !=  strtolower($roomName)){
			$sql = $driver->prepare("SELECT * FROM chatroom WHERE user_create = :user");
			$sql->BindParam(":user",$_SESSION['member_chat']);
			$sql->execute();
			
			if($sql->rowCount() >= 5){
				$_SESSION['max_upload_room'] = $roomName;
				redirect("user");
			}else{
				if(move_uploaded_file($_FILES['roomImage']['tmp_name'], $folder.$helper)){
					$data = array(
						'user_create' => $_SESSION['member_chat'],
						'room_name' => $roomName,
						'room_type' => 'Public',
						'room_password' => '-',
						'room_image' => $helper,
						'room_date' => $tanggal_jam,
						'room_active' => 'Y',
						'room_popular' => 'N' 
						);
						
					$driver->insert_tabel("chatroom",$data);
					
					$_SESSION['success_upload_room'] = $roomName;
					
					redirect("user");
				}else{
					$_SESSION['proses_error'] = "Proses Error";
					
					redirect("user");
				}
			}
		}else{
			$_SESSION['room_exists'] = $roomName;
			redirect("user");
		}
	}
}
?>