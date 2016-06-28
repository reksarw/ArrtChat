<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = "https://";
	} else {
		$uri = "http://";
	}
	
	$uri .= $http;
	
	DEFINE('server', $uri);
	DEFINE('base_url', server."/".$base_url);
	
	date_default_timezone_set($timezone);
	
	// Hari
	switch($hari){
		
		case "Monday":
			$hari = "Senin";
		break;
		
		case "Tuesday":
			$hari = "Selasa";
		break;
		
		// .... //
		
		case "Sunday":
			$hari = "Minggu";
		break;
	}
	
	// Bulan
	switch($bulan) {
		case 1:
                    $bulan = 'Januari';
                    break;
		case 2:
                    $bulan = 'Februari';
                    break;
		case 3:
                    $bulan = 'Maret';
                    break;
		case 4:
                    $bulan = 'April';
                    break;
		case 5:
                    $bulan = 'Mei';
                    break;
		case 6:
                    $bulan = 'Juni';
                    break;
		case 7:
                    $bulan = 'Juli';
                    break;
		case 8:
                    $bulan = 'Agustus';
                    break;
		case 9:
                    $bulan = 'September';
                    break;
		case 10:
                    $bulan = 'Oktober';
                    break;
		case 11:
                    $bulan = 'Nopember';
                    break;
		case 12:
                    $bulan = 'Desember';
                    break;
            }