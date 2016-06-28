<?php
require "../ArrtChat.php";

if(!$_POST){
exit("Access Denied");
}

$key = htmlentities(trim($_POST['keyword']));

$query = $driver->prepare("SELECT * FROM chatroom WHERE room_name like '%" . $key . "%' ORDER BY room_name LIMIT 0,6");
$query->execute();

if($query->rowCount() > 0){
	while($data = $query->fetch()){
	$uri = str_replace(" ","-",$data['room_name']);
	?>
		<div class="col-md-12 room-chat">
			<a href="<?php echo "room/".$uri;?>" style="text-decoration:none;color:#000"><img src="images/<?php echo $data['room_image'];?>" class="img-responsive img-thumbnail" width="50" height="50">
			<?php echo $data['room_name']; ?></a>
		</div>
	<?php
	}
}else{
echo "Kata kunci <strong>'{$key}'</strong> tidak ditemukan.";	
}