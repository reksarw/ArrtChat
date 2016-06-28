<?php

	function redirect($uri){
		
		if($uri != null){
			header("Location:".base_url.$uri);
		}else{
			header("Location:".base_url);
		}
	}
	
	function generate($length = null){
		if($length != null) {
			$panjang = $length;
			$karakter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
			$string = '';
			for ($i = 0; $i < $panjang; $i++) {
			  $pos = rand(0, strlen($karakter)-1);
			  $string .= $karakter{$pos};
			}
				
			return $string;
		}else {
			$panjang = 8;
			$karakter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
			$string = '';
			for ($i = 0; $i < $panjang; $i++) {
			  $pos = rand(0, strlen($karakter)-1);
			  $string .= $karakter{$pos};
			}
				
			return $string;
		}
	}
	
	# Validasi Sanitasi
	function filter_email($email){
		return filter_var($email, FILTER_VALIDATE_EMAIL); # <- Validasi EMAIL
    }
        
    function filter_url($url){
		return filter_var($url, FILTER_VALIDATE_URL); # <- Validasi URL
	}
			
	function filter_ip($ip){
		return filter_var($ip, FILTER_VALIDATE_IP); # <- Validasi Alamat IP
	}
			
	function filter_html($html){
		return htmlspecialchars($html , ENT_QUOTES, 'utf-8'); # <- Encode && filter Kode HTML
	}
			
	function filter_html_decode($html){
		return html_entity_decode($html , ENT_QUOTES, 'utf-8'); # <- Decode Kode HTML
	}
	
	function emoticon($emot){
		switch($emot){
			case ":angry": echo "<img src='../common/emoticon/angry.gif' alt='error' title=':angry' class='pull-left chat'>"; break;
			case ":D": echo "<img src='../common/emoticon/bigsmile.gif' alt='error' title=':D' class='pull-left chat'>"; break;
			case ":blush": echo "<img src='../common/emoticon/blush.gif' alt='error' title=':blush' class='pull-left chat'>"; break;
			case ":cool": echo "<img src='../common/emoticon/cool.gif' alt='error' title=':cool' class='pull-left chat'>"; break;
			case ":cry": echo "<img src='../common/emoticon/crying.gif' alt='error' title=':cry' class='pull-left chat'>"; break;
			case ":doh": echo "<img src='../common/emoticon/doh.gif' alt='error' title=':doh' class='pull-left chat'>"; break;
			case ":dull": echo "<img src='../common/emoticon/dull.gif' alt='error' title=':dull' class='pull-left chat'>"; break;
			case ":evil": echo "<img src='../common/emoticon/evilgrin.gif' alt='error' title=':evil' class='pull-left chat'>"; break;
			case ":x": echo "<img src='../common/emoticon/lipssealed.gif' alt='error' title=':x' class='pull-left chat'>"; break;
			case ":mmm": echo "<img src='../common/emoticon/mmm.gif' alt='error' title=':mmm' class='pull-left chat'>"; break;
			case ":sad": echo "<img src='../common/emoticon/sad.gif' alt='error' title=':sad' class='pull-left chat'>"; break;
			case ":sleepy": echo "<img src='../common/emoticon/sleepy.gif' alt='error' title=':sleepy' class='pull-left chat'>"; break;
			case ":sweat": echo "<img src='../common/emoticon/sweat.gif' alt='error' title=':sweat' class='pull-left chat'>"; break;
			case ":P": echo "<img src='../common/emoticon/tongueout.gif' alt='error' title=':P' class='pull-left chat'>"; break;
			case ":wink": echo "<img src='../common/emoticon/wink.gif' alt='error' title=':wink' class='pull-left chat'>"; break;
			case ":wonder": echo "<img src='../common/emoticon/wondering.gif' alt='error' title=':wonder' class='pull-left chat'>"; break;
			case ":worried:": echo "<img src='../common/emoticon/worried.gif' alt='error' title=':worried' class='pull-left chat'>"; break;
			case ":0": echo "<img src='../common/emoticon/yawn.gif' alt='error' title=':0' class='pull-left chat'>"; break;
			case ":headbang": echo "<img src='../common/emoticon/headbang.gif' alt='error' title=':headbang' class='pull-left chat'>"; break;
		}
	}