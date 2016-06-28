<?php

function md5_helper($string){
	$a = md5($string);
	$b = md5(md5($a));
	$c = md5($b);
	return $c;
}

function filter($string){
	$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars(htmlentities($string,ENT_QUOTES)))));
	return $filter;
}

function banned_words($string,$words){
		foreach($words as $banned_words) {
			if(stristr($string,$banned_words)){
			return false;
			}
		}
	return true;
}

/*** 
function room_created($user){
	
	$query = $driver->prepare("SELECT * FROM chatroom");
	$query->execute();
	
	$data = $query->fetch();
	
	echo $data['user_create'];
}
***/

/** File : ./core/Helper.php **/