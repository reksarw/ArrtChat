<?php
require "../ArrtChat.php";

$query = $driver->prepare("SELECT * FROM message WHERE room_name = '$_SESSION[user_room]' ORDER BY waktu");
$query->execute();

if($query->rowCount() > 0){
while($data = $query->fetch()){
	 // 27
	$string = $data['pesan'];
	$simbol = array(
		"[asmara]","[bigkiss]","[bravi]","[bunga]","[bunga1]","[ciumjauh]","[eggl]","[famous]","[foto]","[gitar]",
		"[guyu]","[guyu1]","[ha]","[hbd]","[hujan_cinta]","[iloveyou]","[kiss]","[love]","[mabuk_cinta]","[melet]",
		"[sembah]","[suling]","[sun_happy]","[sun_sad]","[tepuk]","[up]","[yes]","[Arrt_ily]","[Arrt_kucing]","[Arrt_medusa]","[Arrt_neptunus]",
		"[Arrt_heart]","[Arrt_zeus]"
		);
	$emoticon = array(
		"<img src='../common/emoticon/asmara.gif' alt='error' title='[asmara]' width='30' height='30'>",
		"<img src='../common/emoticon/bigkiss.gif' alt='error' title='[bigkiss]' width='30' height='30'>",
		"<img src='../common/emoticon/bravi.gif' alt='error' title='[bravi]' width='30' height='30'>",
		"<img src='../common/emoticon/bunga.gif' alt='error' title='[bunga]' width='30' height='30'>",
		"<img src='../common/emoticon/bunga1.gif' alt='error' title='[bunga1]' width='30' height='30'>",
		"<img src='../common/emoticon/ciumjauh.gif' alt='error' title='[ciumjauh]' width='30' height='30'>",
		"<img src='../common/emoticon/eggl.gif' alt='error' title='[eggl]' width='30' height='30'>",
		"<img src='../common/emoticon/famous.gif' alt='error' title='[famous]' width='30' height='30'>",
		"<img src='../common/emoticon/foto.gif' alt='error' title='[foto]' width='30' height='30'>",
		"<img src='../common/emoticon/gitar.gif' alt='error' title='[gitar]' width='30' height='30'>",
		"<img src='../common/emoticon/guyu.gif' alt='error' title='[guyu]' width='30' height='30'>",
		"<img src='../common/emoticon/guyu1.gif' alt='error' title='[guyu1]' width='30' height='30'>",
		"<img src='../common/emoticon/ha.gif' alt='error' title='[ha]' width='30' height='30'>",
		"<img src='../common/emoticon/hbd.gif' alt='error' title='[hbd]' width='30' height='30'>",
		"<img src='../common/emoticon/hujan_cinta.gif' alt='error' title='[hujan_cinta]' width='30' height='30'>",
		"<img src='../common/emoticon/iloveyou.gif' alt='error' title='[iloveyou]' width='30' height='30'>",
		"<img src='../common/emoticon/kiss.gif' alt='error' title='[kiss]' width='30' height='30'>",
		"<img src='../common/emoticon/love.gif' alt='error' title='[love]' width='30' height='30'>",
		"<img src='../common/emoticon/mabuk_cinta.gif' alt='error' title='[mabuk_cinta]' width='30' height='30'>",
		"<img src='../common/emoticon/melet.gif' alt='error' title='[melet]' width='30' height='30'>",
		"<img src='../common/emoticon/sembah.gif' alt='error' title='[sembah]' width='30' height='30'>",
		"<img src='../common/emoticon/suling.gif' alt='error' title='[suling]' width='30' height='30'>",
		"<img src='../common/emoticon/sun_happy.gif' alt='error' title='[sun_happy]' width='30' height='30'>",
		"<img src='../common/emoticon/sun_sad.gif' alt='error' title='[sun_sad]' width='30' height='30'>",
		"<img src='../common/emoticon/tepuk.gif' alt='error' title='[tepuk]' width='30' height='30'>",
		"<img src='../common/emoticon/up.gif' alt='error' title='[up]' width='30' height='30'>",
		"<img src='../common/emoticon/yes.gif' alt='error' title='[yes]' width='30' height='30'>",
		"<img src='../common/emoticon/priv4/ily.gif' alt='error' title='[]' width='30' height='30'>",
		"<img src='../common/emoticon/priv4/kucing.gif' alt='error' title='[]' width='30' height='30'>",
		"<img src='../common/emoticon/priv4/medusa.gif' alt='error' title='[]' width='30' height='30'>",
		"<img src='../common/emoticon/priv4/neptunus.gif' alt='error' title='[]' width='30' height='30'>",
		"<img src='../common/emoticon/priv4/transform.gif' alt='error' title='[]' width='30' height='30'>",
		"<img src='../common/emoticon/priv4/zeus.gif' alt='error' title='[]' width='30' height='30'>"
		);
	$pesan = str_replace($simbol , $emoticon , $string);
	
	if($data['username'] == $_SESSION['member_chat']){
	echo "
	<div class='bubble-right'>
	$pesan
	<p class='bubble'>$data[waktu]</p>
	</div>
	";
	}else{
	echo "
	<div class='bubble-left'>
	<strong>$data[username]</strong><br>
	$pesan
	<p class='bubble'>$data[waktu]</p>
	</div>
	";
	}
}
}else{
echo "
	<div class='bubble-left'>
	Selamat Datang di Room <strong>$_SESSION[user_room]</strong><br>
	Katakan sesuatu untuk memulai ngobrol.
	<p>Oleh : <strong>System</strong> pada $tanggal_jam</p>
	</div>
	";
}
?>