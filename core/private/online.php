<?php
include "../ArrtChat.php";

$query = $driver->prepare("SELECT * FROM online WHERE room = '$_SESSION[user_room]'");
$query->execute();
$hitung = $query->rowCount();

if($hitung < 0){
	exit();
}else{
	while($result = $query->fetch()){
	?>
	<div class="col-md-4 member-online">
		<img src="<?php echo base_url."images/".$result['gambar']; ?>">&nbsp;<?php echo $result['username']; ?>
	</div>
	<?php
	}
}

/* Path : ./core/private/online.php */