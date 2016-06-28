<?php
// Global Configuration
$config['http']			= $_SERVER['HTTP_HOST']; // Otomatis deteksi host (url)
$config['base_url']		= "/projects/arrtchat/"; // Folder Web
$config['timezone']		= 'Asia/Jakarta'; // Time Zone UTC (+7) Indonesia
$config['tanggal']		= date('Y-m-d'); // Tanggal : 2016-12-31
$config['jam'] 			= date('H:i:s'); // Waktu : 23:59:59
$config['tanggal_jam']	= date('Y-m-d H:i:s'); // Tanggal dan Waktu 2016-12-31 23:59:59
$config['hari']			= date('l'); // Hari : Senin , Selasa , Rabu
$config['bulan']		= date('m'); // Bulan : Januari , Februari , Maret
$config['time_cookie']	= 3600*3; // 3 Jam ( 3600*3 )
$config['session_id']	= session_id(); // Session ID User