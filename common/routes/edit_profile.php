<?php
if(!isset($_SESSION['member_chat'])){
exit("Access Denied");
}

$query = $driver->prepare("SELECT * FROM user WHERE username = :user");
$query->BindParam(":user",$_SESSION['member_chat']);
$query->execute();

if($query->rowCount() > 1){
exit();
}

$data = $query->fetch();

$_SESSION['_gambar'] = $data['gambar'];
?>
<div class="col-md-12">
	
	<form action="<?php echo base_url; ?>core/private/edit_profile.php" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label name="Nickname">Nama Lengkap</label>
		<input type="text" name="nickname" value="<?php echo $data['nickname']; ?>" class="form-control" autocomplete="off"/> 
	</div>
	
	<div class="form-group">
		<label name="Email">Email</label>
		<input type="email" name="email" value="<?php echo $data['email']; ?>" class="form-control" autocomplete="off" /> 
	</div>
	
	<div class="form-group">
		<label name="Gambar"></label>
		<img src="<?php echo base_url."images/".$_SESSION['_gambar']; ?>" width="120" height="100" alt="No Image" /><br><br/>
		<input type="file" name="profileImage" required />
	</div>
	
	<div class="form-group">
		<input type="submit" value="Edit" class="btn btn-success" name="formEdit" />
	</div>
	
	</form>
</div>