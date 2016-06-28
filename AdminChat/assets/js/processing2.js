$(document).ready(function(){
		  $("#submit").click(function(){
			//To Display progress bar 
			$("#loading").show();
/*			
			var judul =$("#judul").val();
			var isi =$("#isi").val();
			var foto =$("#foto").val();
*/			
			//transfering form information to different page without page refresh
			$.post("../../html/konten/index.php",{ judul: judul, isi: isi, foto: foto},
				function(status){
					
					//To Hide progress bar 
					$("#loading").hide();
					alert(status);
				  });			
		  });
	    });
