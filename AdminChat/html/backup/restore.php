 <div class="page-content-wrap">
 <div class="row">
    <div class="col-md-12">
		<form action="?arrt=restore" method="post" enctype="multipart/form-data"class="form-horizontal">
			<div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Form</strong> Restore Database</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>
                </div>
                <div align="center" class="panel-body">
                    <p><em>backup</a></a></strong> semua data yang ada didalam database &quot;<strong>ARRTCHAT</strong>&quot;.</em></p><p>
						<input type ="file" class="fileinput btn-info" name="datafile" value="Pilih File" /><br><br />
						<button class="btn btn-info " name="restore" onClick="return confirm('Apakah Anda yakin ingin restore database ini?')"value="Restore">Restore</button>
				</div>
                <div class="panel-footer">
                   <button onclick="history.go(-1)" type="reset" class="btn btn-default">Back</button>              
                </div>
            </div>
        </form>
	</div>
</div>
</div>
<?php
if(isset($_POST['restore'])){
	$koneksi=mysql_connect("localhost","root","");
	mysql_select_db("arrtchat",$koneksi);
	
	$nama_file=$_FILES['datafile']['name'];
	$ukuran=$_FILES['datafile']['size'];
	
	//periksa jika data yang dimasukan belum lengkap
	if ($nama_file=="")
	{
		echo "Fatal Error";
	}else{
		//definisikan variabel file dan alamat file
		$uploaddir='./data/';
		$alamatfile=$uploaddir.$nama_file;

		//periksa jika proses upload berjalan sukses
		if (move_uploaded_file($_FILES['datafile']['tmp_name'],$alamatfile))
		{
			
			$filename = './data/'.$nama_file.'';
			
			// Temporary variable, used to store current query
			$templine = '';
			// Read in entire file
			$lines = file($filename);
			// Loop through each line
			foreach ($lines as $line)
			{
				// Skip it if it's a comment
				if (substr($line, 0, 2) == '--' || $line == '')
					continue;
			 
				// Add this line to the current segment
				$templine .= $line;
				// If it has a semicolon at the end, it's the end of the query
				if (substr(trim($line), -1, 1) == ';')
				{
					// Perform the query
					mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
					// Reset temp variable to empty
					$templine = '';
				}
			}
			echo "<center>Berhasil Restore Database, silahkan di cek.</center>";
		
		}else{
			//jika gagal
			echo "Proses upload gagal, kode error = " . $_FILES['location']['error'];
		}	
	}

}else{
	unset($_POST['restore']);
}
?>

 <!-- START PRELOADS -->
        <audio id="audio-alert" src="../assets/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="../assets/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->             
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="../assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='../assets/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="../assets/js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="../assets/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="../assets/js/settings.js"></script>
        
        <script type="text/javascript" src="../assets/js/plugins.js"></script>        
        <script type="text/javascript" src="../assets/js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>
