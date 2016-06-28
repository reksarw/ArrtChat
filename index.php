<?php
error_reporting(0);
require "core/ArrtChat.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>ArrtChat - Chatting Online GRATIS</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="<?php echo file_get_contents('meta/author.txt'); ?>" >
	<meta name="keywords" content="<?php echo file_get_contents('meta/keywords.txt'); ?>">
	<meta name="description" content="<?php echo file_get_contents('meta/description.txt'); ?>">
	<meta name="robots" content="<?php echo file_get_contents('meta/robots.txt'); ?>">
	<meta name="Copyright" content="<?php echo file_get_contents('meta/copyright.txt'); ?>"/>
	
	<link rel="shortcut icon" href="<?php echo base_url;?>images/favicon.png">
	
	<link rel="stylesheet" href="<?php echo base_url;?>frontend/css/style.css">
</head>

<body onload="index_load();">

	<div id="hidden">
	<div id="progress-bar"></div>
	<div id="loading"></div></div>

	<div class="container" id="is-container">
		<div class="row">
			<div class="col-md-12">
				<div class="well">
				<div class="col-md-6 is-button"><button type="submit" id="btnMasuk" class="btn btn-block btn-info text-uppercase">Masuk</button></div>
				<div class="col-md-6 is-button"><button type="submit" id="btnDaftar" class="btn btn-block btn-success text-uppercase">Daftar</button></div>
				
				<section id="interface">
				<h3 class="text-center"><span class="fa fa-smile-o fa-3x"></span></h3>
				<?php include "core/private/session_index.php"; ?>
				
				<p class="text-center h3">Selamat Datang di <strong>ArrtChat</strong><br/>
				"Mari bergabung di situs <i>ArrtChat</i> untuk bertemu dengan teman lama dan teman baru di dunia<br/> ArrtChat !!!"</p>
				
				<small class="version pull-right">ArrtChat Version 1.0.5</small>
				<div class="clearfix"></div>
				</section>
				
				<section id="masuk">
				<h3>Login Member</h3>
				<form action="core/private/login.php" method="post" role="form" data-toggle="validator" class="shake" name="loginForm">
					<div class="row">
						<div class="form-group col-md-6">
							<label for="username" class="h4">Username</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username atau Email" required data-error="Username atau Email perlu diisi." autocomplete="off">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group col-md-6">
							<label for="password" class="h4">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required data-error="Password perlu diisi." autocomplete="off">
							<div class="help-block with-errors"></div>
						</div>
					</div>
					
					<!--<a href="#reset-password" id="lupa-password">Lupa Password</a>-->
					<button type="submit" id="form-submit" name="submitLogin" class="btn btn-success btn-lg pull-right ">Submit</button>
					<div id="msgSubmit" class="h3 text-center hidden"></div>
					<div class="clearfix"></div>
				</form>
				</section>
				
				<section id="daftar">
				<h3>Register Member</h3>
				<form action="core/private/register.php" method="post" role="form" data-toggle="validator" class="shake" name="registerForm">
					<div class="row">
						<div class="form-group col-md-6">
							<label for="nama_lengkap" class="h4">Nama Lengkap</label>
							<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required data-error="Nama Lengkap perlu diisi." autocomplete="off">
							<div class="help-block with-errors"></div>
						</div>
						
						<div class="form-group col-md-6">
							<label for="nama_pengguna" class="h4">Nama Pengguna</label>
							<input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" placeholder="Nama Pengguna" required data-error="Nama Pengguna perlu diisi." autocomplete="off">
							<div class="help-block with-errors"></div>
						</div>
						
						<div class="form-group col-md-12">
							<label for="email" class="h4">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email Pengguna" required data-error="Periksa email dengan benar." autocomplete="off">
							<div class="help-block with-errors"></div>
						</div>
						
						<div class="form-group col-md-12">
							<label for="password" class="h4">Password</label>
							<input type="password" class="form-control" id="pass" name="password" placeholder="Password Pengguna" required data-error="Password perlu diisi." autocomplete="off">
							<div class="help-block with-errors"></div>
						</div>
						
						<div class="form-group col-md-12">
							<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" class="radio-inline" required data-error="Jenis Kelamin perlu dipilih."/> Laki-Laki
							<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" class="radio-inline" /> Perempuan
							<div class="help-block with-errors"></div>
						</div>
					</div>
					
					<button type="submit" id="form-submit" name="submitRegister" class="btn btn-success btn-lg pull-right ">Submit</button>
					<div id="msgs" class="h3 text-center hidden"></div>
					<div class="clearfix"></div>
				</form>
				</section>
				
				<section id="reset-password">
				<h3>Lupa Password</h3>
				<form action="core/private/reset_password.php" method="post" role="form" data-toggle="validator" class="shake" name="ResetPassword">
					<div class="row">
						<div class="form-group col-md-6">
							<label for="nama_lengkap" class="h4">Nama Lengkap</label>
							<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required data-error="Nama Lengkap perlu diisi." autocomplete="off">
							<div class="help-block with-errors"></div>
						</div>
						
						<div class="form-group col-md-6">
							<label for="nama_pengguna" class="h4">Username</label>
							<input type="text" class="form-control" id="nama_pengguna" name="username" placeholder="Username Pengguna" required data-error="Username perlu diisi." autocomplete="off">
							<div class="help-block with-errors"></div>
						</div>
					</div>
					
					<button type="submit" id="form-submit" name="resetPassword" class="btn btn-success btn-lg pull-right">Submit</button>
					<div id="msgs" class="h3 text-center hidden"></div>
					<div class="clearfix"></div>
				</form>
				</section>
				</div>
			</div>
		</div>
	</div>

	<!-- JavaScript Core -->
	<script type="text/javascript" src="<?php echo base_url;?>frontend/js/idle.js"></script>
	<script type="text/javascript" src="<?php echo base_url;?>frontend/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url;?>frontend/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url;?>frontend/js/validator.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url;?>frontend/js/custom.js"></script>
</body>
</html>