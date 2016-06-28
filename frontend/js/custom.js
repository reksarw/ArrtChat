$(document).ready(function(){
	/*** SEARCH DATA ***/
	$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "core/private/get_room.php",
		data:'keyword='+$(this).val(),
		success: function(data){
			$("#result-box").show();
			$("#default-room").hide();
			$("#result-box").html(data);
		}
		});
	});
	
	// Interface
	$("#alert-info").fadeOut(10000);
	$("#masuk").hide();
	$("#daftar").hide();
	$("#reset-password").hide();
	
	$("#btnMasuk").click(function(){
		$("#masuk").show();
		$("#loginForm").trigger('reset');
		$("#daftar").hide();
		$("#interface").hide();
		$("#reset-password").hide();
	});
	
	$("#btnDaftar").click(function(){
		$("#masuk").hide();
		$("#registerForm").trigger('reset');
		$("#daftar").show();
		$("#interface").hide();
		$("#reset-password").hide();
	});
	
	$("#lupa-password").click(function(){
		$("#masuk").hide();
		$("#ResetPassword").trigger('reset');
		$("#daftar").hide();
		$("#reset-password").show();
		$("#interface").hide();
	});
	
	// Loading
	$("#hidden").css('display', 'block');
	$("#progress-bar").animate({width:"65%"}, 1500);
});


$(window).bind('load', function() {
$("#progress-bar").stop().animate({width:"100%"}, 1500, function() {
$("#hidden").fadeOut(); }); });

$(function() {
	$('nav#menu').mmenu();
	$('#link-active a').click(function() {
		var variabel = $(this).attr('href');
			$('#is-container').load(variabel);
		return false;
	});
});