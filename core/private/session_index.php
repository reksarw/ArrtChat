<?php
if(isset($_SESSION['_email'])){
?>
<div class="alert alert-warning" role="alert" id="alert-info">
	<strong>PERINGATAN!</strong> Email <strong><?php echo $_SESSION['_email']; ?></strong> sudah digunakan.
</div>
<?php
unset($_SESSION['_email']);
}

if(isset($_SESSION['_username'])){
?>
<div class="alert alert-danger" role="alert" id="alert-info">
	<strong>PERINGATAN!</strong> Username <strong><?php echo $_SESSION['_username']; ?></strong> sudah digunakan.
</div>
<?php
unset($_SESSION['_username']);
}

if(isset($_SESSION['_eNotValid'])){
?>
<div class="alert alert-warning" role="alert" id="alert-info">
	<strong>PERINGATAN!</strong> Email <strong><?php echo $_SESSION['_eNotValid']; ?></strong> tidak valid.
</div>
<?php
unset($_SESSION['_eNotValid']);
}

if(isset($_SESSION['user_404'])){
?>
<div class="alert alert-danger" role="alert" id="alert-info">
	<strong>GAGAL!</strong> Username <strong><?php echo $_SESSION['user_404']; ?></strong> tidak ditemukan.
</div>
<?php
unset($_SESSION['user_404']);
}

if(isset($_SESSION['password_404'])){
?>
<div class="alert alert-danger" role="alert" id="alert-info">
	<strong>GAGAL!</strong> Password salah.
</div>
<?php
unset($_SESSION['password_404']);
}

if(isset($_SESSION['BelumLogin'])){
?>
<div class="alert alert-danger" role="alert" id="alert-info">
	<strong>GAGAL!</strong> Anda harus terlebih login dahulu.
</div>
<?php
unset($_SESSION['BelumLogin']);
}

if(isset($_SESSION['user_online'])){
?>
<div class="alert alert-danger" role="alert" id="alert-info">
	<strong>GAGAL LOGIN !</strong> User <strong><?php echo $_SESSION['user_online']; ?></strong> sedang Online.
</div>
<?php	
unset($_SESSION['user_online']);
}