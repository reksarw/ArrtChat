$(document).ready(function() {					
	/*** AMBIL PESAN DARI DATABASE SECARA LIVE ***/ 
	function ambil_pesan(){
		$("#loading-pesan").fadeOut(1000);
		$(".is-room").load("../core/private/get_msgs.php");
		var con = document.getElementById("is-room");
		con.scrollTop = con.scrollHeight;
	}
	
	setInterval(ambil_pesan,2000);
	
	/*** AUTO SCROLL 20 DETIK ***/
	
	function auto_scroll(){
		var con = document.getElementById("is-room");
		con.scrollTop = con.scrollHeight;
	}
	
	setInterval(auto_scroll,20000);
	
	/*** HAPUS PERCAKAPAN ***/
	$("#del-msgs").click(function() {
		$.ajax({
			url : '../core/private/del_msgs.php',
			type : 'POST',
			successs : function(hapus_percakapan){
			}
		});
	});
	
	/*** PESAN SUBMIT ***/
	$("#form_pesan").submit(function(){
		var pesan = $("#submit_pesan").val();
		var $btn = $(this).button('loading');
		
			$.ajax({
				url : '../core/private/push_msgs.php',
				type : 'POST',
				data : 'pesan='+pesan,
				success : function(pesan)
					{
					// html5 DOM audio play
					var suara=document.getElementById("send_audio");
					suara.play();
					if(pesan=="terkirim")
					{
					ambil_pesan();
					$("#submit_pesan").val("");
					}
					else
					{
					return false;
					}
				},
			});
		
		$btn.button('reset');
		return false;
	});
	
	/*** AUDIO KIRIM PESAN ***/
	var audio_kirim = $('#send_audio');
	audio_kirim.hide();
	
	$("#emoticon").popover({
		html: true,
		content: function(){
			return "<img src='../common/emoticon/asmara.gif' title='[asmara]' onClick=\"addemot('[asmara]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/bigkiss.gif' title='[bigkiss]' onClick=\"addemot('[bigkiss]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/bravi.gif' title='[bravi]' onClick=\"addemot('[bravi]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/bunga.gif' title='[bunga]' onClick=\"addemot('[bunga]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/bunga1.gif' title='[bunga1]' onClick=\"addemot('[bunga1]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/ciumjauh.gif' title='[ciumjauh]' onClick=\"addemot('[ciumjauh]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/eggl.gif' title='[eggl]' onClick=\"addemot('[eggl]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/famous.gif' title='[famous]' onClick=\"addemot('[famous]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/foto.gif' title='[foto]' onClick=\"addemot('[foto]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/gitar.gif' title='[gitar]' onClick=\"addemot('[gitar]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/guyu.gif' title='[guyu]' onClick=\"addemot('[guyu]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/guyu1.gif' title='[guyu1]' onClick=\"addemot('[guyu1]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/ha.gif' title='[ha]' onClick=\"addemot('[ha]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/hbd.gif' title='[hbd]' onClick=\"addemot('[hbd]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/hujan_cinta.gif' title='[hujan_cinta]' onClick=\"addemot('[hujan_cinta]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/iloveyou.gif' title='[iloveyou]' onClick=\"addemot('[iloveyou]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/kiss.gif' title='[kiss]' onClick=\"addemot('[kiss]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/love.gif' title='[love]' onClick=\"addemot('[love]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/mabuk_cinta.gif' title='[mabuk_cinta]' onClick=\"addemot('[mabuk_cinta]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/melet.gif' title='[melet]' onClick=\"addemot('[melet]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/sembah.gif' title='[sembah]' onClick=\"addemot('[sembah]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/suling.gif' title='[suling]' onClick=\"addemot('[suling]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/sun_happy.gif' title='[sun_happy]' onClick=\"addemot('[sun_happy]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/sun_sad.gif' title='[sun_sad]' onClick=\"addemot('[sun_sad]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/tepuk.gif' title='[tepuk]' onClick=\"addemot('[tepuk]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/up.gif' title='[up]' onClick=\"addemot('[up]')\" width='19' height='19'>"+
			"&nbsp;<img src='../common/emoticon/yes.gif' title='[yes]' onClick=\"addemot('[yes]')\" width='19' height='19'>";
		}
	});
});

	function addemot(emot)
	{
	document.forms[0].pesan.value+=" "+emot;
	}

	/*** HAPUS PERCAKAPAN CONFIRM ***/
	
	function confirmThis(){
		if(confirm("Apakah anda ingin menghapus percakapan?")){
			return true;
		}
		return false;
	}