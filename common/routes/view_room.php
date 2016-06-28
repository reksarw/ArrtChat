<?php
require "../../core/ArrtChat.php";
if(!isset($_SESSION['member_chat']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
echo "<script>window.location.reload()</script>";
exit();
}

$roomName = $_REQUEST['nama_room'];

if(preg_match("/-/",$roomName)){
$c = str_replace("-"," ",$roomName);
$query = $driver->prepare("SELECT * FROM chatroom WHERE room_name = :room");
$query->BindParam(":room",$c);
$query->execute();
}else{
$query = $driver->prepare("SELECT * FROM chatroom WHERE room_name = :room");
$query->BindParam(":room",$roomName);
$query->execute();
}

if($query->rowCount() > 0){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ArrtChat - <?php require "title_room.php"; ?></title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="author" content="<?php echo file_get_contents('../../meta/author.txt'); ?>">
		<meta name="keywords" content="<?php echo file_get_contents('../../meta/keywords.txt'); ?>">
		<meta name="description" content="<?php echo file_get_contents('../../meta/description.txt'); ?>">
		<meta name="robots" content="<?php echo file_get_contents('../../meta/robots.txt'); ?>">
		<meta name="Copyright" content="<?php echo file_get_contents('../../meta/copyright.txt'); ?>"/>
		
		<link rel="shortcut icon" href="<?php echo base_url;?>images/favicon.png">
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>frontend/css/style.css">
	</head>
	
	<body onload="online()" onbeforeunload="exit()">
		<div class="container" id="is-container">
		
			<a href="../user"><span class="fa fa-chevron-left"></span>&nbsp;Back</a>
			
			<?php 
			$query = $driver->prepare("SELECT * FROM chatroom WHERE room_name = :room AND user_create = :user");
			$query->BindParam(":room",$_SESSION['user_room']); $query->BindParam(":user",$_SESSION['member_chat']); $query->execute();
			$data = $query->fetch();
			if($data['user_create'] == $_SESSION['member_chat']){
			?>
			<a href="#" id="del-msgs" onclick="return confirmThis()"><button class="btn btn-success btn-sm pull-right">Hapus Percakapan</button></a>
			<?php } ?>
			
			<div class="col-md-12" id="user-online">
			<span id="onlineUser"></span>
			</div>
			
			<div class="col-md-12">
				<div class="is-room" id="is-room">
					<div id="loading-pesan"><marquee><img src="<?php echo base_url."common/emoticon/priv4/kucing.gif"; ?>"></marquee></div>
				</div>
				
				<div class="chat-input" id="chatting">
					<form method="post" action="" id="form_pesan">
					<!--<input type="text" class="form-control chat" name="pesan" maxlength="300" id="submit_pesan" autocomplete="off" placeholder="Katakan sesuatu.." required x-moz-errormessage="Katakan sesuatu..">-->
					<textarea style="resize:vertical;min-height:100px;" name="pesan" maxlength="300" id="submit_pesan" class="form-control chat" placeholder="Katakan sesuatu..." required x-moz-errormessage="Katakan sesuatu.."></textarea>
					<button type="submit" class="btn btn-primary pull-right chat" data-loading-text="Tunggu..." id="kirim" name="kirim">Kirim</button>
					</form>
					
					<a href="#chatting" data-toggle="popover" class="pull-right" id="emoticon" data-placement="top" title="Emoticons (klik)">
					<span class="fa fa-smile-o pull-right btn btn-info" style="margin:9px;"></span></a>
				
					<audio controls id="send_audio">
					<source src="<?php echo base_url;?>common/audio/send.mp3" type="audio/mpeg">
					Maaf , Browser anda tidak mendukung audio! , Silahkan coba browser yang lain.
					</audio>
				</div>
			</div>
			
		</div>
		
		<!--<script type="text/javascript" src="<?php echo base_url;?>frontend/js/jquery-1.11.2.min.js"></script>-->
		<script type="text/javascript" src="<?php echo base_url;?>frontend/js/jQuery.js"></script>
		<script type="text/javascript" src="<?php echo base_url;?>frontend/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url;?>frontend/js/idle.js"></script>
		<script type="text/javascript" src="<?php echo base_url;?>frontend/js/my_ajax.js"></script>	
		<script>
		function alertThis(string){
			alert(string);
			return true;
		}
		</script>
	</body>
</html>
<?php 
}
else{
	echo "Chat Room tidak ditemukan!";
}
?>