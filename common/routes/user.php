<?php
if(!isset($_SESSION['member_chat'])){
$_SESSION['BelumLogin'] = "TRUE";

redirect();
exit();
}
$query = $driver->prepare("SELECT * FROM user WHERE username = '$_SESSION[member_chat]' OR email = '$_SESSION[member_chat]'");
$query->execute();
$data = $query->fetch();

$jk = $data['jenis_kelamin'];
if($jk == "L") { $jenis_kelamin = "Laki-Laki"; }elseif($jk == "P") { $jenis_kelamin = "Perempuan";} else { $jenis_kelamin = "Other"; }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="author" content="<?php echo file_get_contents('../meta/author.txt'); ?>">
		<meta name="keywords" content="<?php echo file_get_contents('../meta/keywords.txt'); ?>">
		<meta name="description" content="<?php echo file_get_contents('meta/description.txt'); ?>">
		<meta name="robots" content="<?php echo file_get_contents('../meta/robots.txt'); ?>">
		<meta name="Copyright" content="<?php echo file_get_contents('../meta/copyright.txt'); ?>"/>
		<title>ArrtChat - Chatting Online GRATIS</title>
		
		<link rel="shortcut icon" href="images/favicon.png">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url; ?>frontend/css/demo.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url; ?>frontend/css/style.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url; ?>frontend/font-awesome/css/font-awesome.min.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url; ?>frontend/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url; ?>frontend/_as/css/jquery.mmenu.all.css" />
	</head>
	<body onload="user_load()">
		<div id="page">
			<div class="header pull-left">
				<a href="#menu"></a>
				<?php echo $data['nickname']." <span class='fa fa-chevron-left'></span>".$data['email']."<span class='fa fa-chevron-right'></span>"; ?>
				
			</div>
			
			<div class="container" id="is-container">
			
				<div class="col-md-12">
					<?php include "session_room.php"; ?>
			
					<input type="text" class="form-control" name="search" id="search-box" autocomplete="off" style="margin-bottom:10px" placeholder="Cari Room...">

					<div id="result-box">
					<?php
					$res = $driver->prepare("SELECT * FROM chatroom WHERE room_active = 'Y' AND room_popular = 'Y'");
					$res->execute();
					while($result = $res->fetch()){
					/*** SIMPLE FUNCTION ***/
					$uri = str_replace(" ","-",$result['room_name']);
					switch($result['room_type']){ 
					case "Private": $tipe = "<span class='fa fa-lock'></span>"; break;
					default: $tipe = ""; break;
					}
					/*****/
					?>
						<div class="col-md-12 room-chat" id="default-room">
							<a href="<?php echo "room/".$uri;?>" style="text-decoration:none;color:#000"><img src="images/<?php echo $result['room_image'];?>" class="img-responsive img-thumbnail" width="50" height="50">
							<?php echo $result['room_name']."&nbsp;".$tipe; ?></a>
						</div>
					<?php
					 }
					 ?>
					</div>
				</div>
			</div>
			<!--
			<div class="content">
				<p><strong>This is a demo. <span class="fa fa-smile-o"></span></strong><br />
					Click the menu icon to open the menu.</p>
				<p>For more demos, a tutorial, documentation and support, please visit <a href="http://mmenu.frebsite.nl" target="_blank">mmenu.frebsite.nl</a></p>			
			</div>
			-->
			
			<nav id="menu">
				<ul>
					<li><a href="<?php echo base_url."user"; ?>">Home</a></li>
					<li><a href="javascript:void(0);" onclick="this.href='#mm-1'">Tentang Saya</a>
						<ul>
							<li><a>Nama Lengkap : <?php echo $data['nickname'];?></a></li>
							<li><a>Username : <?php echo $data['username'];?></a></li>
							<li><a>Email : <?php echo $data['email'];?></a></li>
							<li><a>Jenis Kelamin : <?php echo $jenis_kelamin; ?></a></li>	
							<li><a>Terdaftar : <?php echo $data['terdaftar'];?></a></li>
						</ul>
					</li>
					<li id="link-active"><a href="javascript:void(0);" onclick="this.href='create'">Buat Room</a></li>
					<li id="link-active"><a href="javascript:void(0);" onclick="this.href='edit'">Edit Tentang</a></li>
					<?php
					$query = $driver->prepare("SELECT * FROM chatroom WHERE user_create = :username");
					$query->BindParam(":username",$_SESSION['member_chat']);
					$query->execute();
					
					$num = $query->rowCount();
					if($num > 0){
					?>
					<li id="link-active"><a href="javascript:void(0);" onclick="this.href='my_room'">Room Saya (<?php echo $num; ?>)</a></li>
					<?php } ?>
					<li><a href="javascript:void(0);" onclick="this.href='logout'">Logout</a></li>
				</ul>
			</nav>
		</div>
		
		<script type="text/javascript" src="<?php echo base_url; ?>frontend/js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url;?>frontend/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url;?>frontend/js/idle.js"></script>
		<script type="text/javascript" src="<?php echo base_url; ?>frontend/js/custom.js"></script>
		<script type="text/javascript" src="<?php echo base_url; ?>frontend/_as/js/jquery.mmenu.all.min.js"></script>
		<script>
		function confirmThis(str){
			if(confirm(str)){
				return true;
			}else{
				return false;
			}
		}
		function isText(e){
		var code;
		if (!e) var e = window.event;
		if (e.keyCode) code = e.keyCode;
		else if (e.which) code = e.which;
		var character = String.fromCharCode(code);
		//alert('Character was ' + character);
			//alert(code);
			//if (code == 8) return true;
			var AllowRegex  = /^[\ba-zA-Z\s-]$/;
			if (AllowRegex.test(character)) return true;    
			return false;
		}

		function isNumber(evt) {
			var charCode = (evt.which) ? evt.which : evtKeyCode;
			if(charCode > 31 && (charCode < 48 || charCode > 57)){
				return false;
			}
			return true;
		}
		</script>
	</body>
</html>