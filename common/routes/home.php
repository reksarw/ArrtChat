<input type="text" class="form-control" name="search" id="search-box" autocomplete="off" style="margin-bottom:10px" placeholder="Cari Room...">

<div id="result-box"></div>
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
	<div class="col-md-4 room-chat" id="default-room">
		<a href="<?php echo "room/".$uri;?>" style="text-decoration:none;color:#000"><img src="images/<?php echo $result['room_image'];?>" class="img-responsive img-thumbnail" width="50" height="50">
		<?php echo $result['room_name']."&nbsp;".$tipe; ?></a>
	</div>
<?php
 }
 ?>