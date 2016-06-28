<?php
if(isset($_SESSION['max_upload_room'])){
?>
<div class="alert alert-info alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	<strong>PERINGATAN!</strong> User hanya dapat membuat <strong>5 Room</strong> Saja.
</div>

<?php
unset($_SESSION['max_upload_room']);
}

if(isset($_SESSION['success_upload_room'])){
?>
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	<strong>SUKSES!</strong> Berhasil membuat room <strong><?php echo $_SESSION['success_upload_room']; ?></strong>
</div>
<?php
unset($_SESSION['success_upload_room']);
}

if(isset($_SESSION['proses_error'])){
?>
<div class="alert alert-info alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	<strong>WARNING!</strong> PROSES UPLOAD ERROR : Contact Admin <a href="mailto:support@arrtchat.net">support@arrtchat.net</a>.
</div>
<?php
unset($_SESSION['proses_error']);
}

if(isset($_SESSION['room_exists'])){
?>
<div class="alert alert-info alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	<strong>PEMBERITAHUAN!</strong> <?php echo $_SESSION['room_exists']; ?> sudah digunakan orang lain.
</div>
<?php
unset($_SESSION['room_exists']);
}

if(isset($_SESSION['hapus_room'])){
?>
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	<strong>BERHASIL!</strong> menghapus room <strong><?php echo $_SESSION['hapus_room']; ?></strong>.
</div>
<?php
unset($_SESSION['hapus_room']);
}

if(isset($_SESSION['profile_update'])){
?>
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	<strong>BERHASIL!</strong> Ubah Profile.
</div>
<?php
unset($_SESSION['profile_update']);
}

if(isset($_SESSION['error'])){
?>
<div class="alert alert-danger alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	<?php echo $_SESSION['error']; ?>
</div>
<?php
unset($_SESSION['error']);
}
?>