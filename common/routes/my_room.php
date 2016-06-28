<?php
$res = $driver->prepare("SELECT * FROM chatroom WHERE user_create = :user_chat");
$res->BindParam(":user_chat",$_SESSION['member_chat']);
$res->execute();

while($result = $res->fetch()){
	/*** SIMPLE FUNCTION ***/
	$uri = str_replace(" ","-",$result['room_name']);
	switch($result['room_type']){ 
	case "Private": $tipe = "<span class='fa fa-lock'></span>"; break;
	default: $tipe = ""; break;
	}
?>
	<div class="col-md-6" id="my-room">
		<a href="<?php echo "room/".$uri;?>" style="text-decoration:none;color:#000"><img src="images/<?php echo $result['room_image'];?>" class="img-responsive img-thumbnail" width="70" height="70">
		<?php echo $result['room_name']."&nbsp;".$tipe; ?></a>
		&nbsp;<a href="<?php echo base_url;?>core/private/hapus_room.php?.rand=<?php echo generate(20);?>&amp;room_id=<?php echo trim($result['room_id']);?>" 
		onclick="return confirmThis('Apakah ingin menghapus Room <?php echo $result['room_name']; ?> ?');"><span class="fa fa-remove" style="color:#f00">&nbsp;</span>Hapus Room</a>
	</div>
<?php
}
?>