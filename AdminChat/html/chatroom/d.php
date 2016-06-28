<li class="active"><a href="?arrt=room">Daftar</a></li>
<li class="active"><a href="?arrt=room&r=i">Tambah user</a></li>
<li class="active"><a href="">Detail user</a></li>
<li class="active"><a href="?arrt=room&r=e&id=<?php echo $_GET['id'] ?>">Edit user</a></li>
                </ul>
<!-- PAGE CONTENT WRAPPER -->
        <link rel="stylesheet" type="text/css" href="../assets/css/proses.css">
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                           
                         
                          <form class="form-horizontal" action="" method="post" role="form" enctype="multipart/form-data" >
                              
                            <div class="panel panel-default">	
                                 <div class="alert alert-info" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>Tambah</strong> User
                            </div>
                                <div class="panel-body">                                                                        
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Pembuat Room</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="proom" value="<?php echo $record[user_create]?>" />
                                            </div>                                            
                                           
                                        </div>
                                    </div>
									  <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nama Room</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="nameroom" value="<?php echo $record[room_name]?>" />
                                            </div>                                            
                                            
                                        </div>
                                    </div>
									  <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Pembuatan Room</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="nameroom" value="<?php echo $record[room_date]?>" />
                                            </div>                                            
                                            
                                        </div>
                                    </div>
                                  
									   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Type Room</label>
                                        <div class="col-md-6 col-xs-12">                                                                                           
                                            <select class="form-control select" name="troom">
                                           <option value="<?php echo $record['room_type'] ?>">
									 <?php 
									 $Public=$record['room_type'];
									 if($Public=='Public'){
										 echo "Public";
										 
									 }
									 else{
										 
										echo"Private";
									 }?>
									 
									 </option>



										  <option value="Public">Public</option>
                                                
                                               
													
                                                <option value="Private" >Private</option>
                                                
                                               
                                            </select>
                                          
                                        </div>
                                    </div>
                                 
            
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Aktifasi Room</label>
                                        <div class="col-md-6 col-xs-12">                                                                                           
                                            <select class="form-control select" name="aroom">
                                             <option value="<?php echo $record['room_active'] ?>">
									 <?php 
									 $ra=$record['room_active'];
									 if($ra==Y){
										 echo "Active";
										 
									 }
									 else{
										 
										echo"Tak Aktif";
									 }?>
									 
									 </option>
                                                
										  <option value="Y">Active</option>
                                                
                                               
													
                                                <option value="N" >Tak Aktif</option>
                                               
                                            </select>
                                          
                                        </div>
                                    </div>
									  <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Room Populer</label>
                                        <div class="col-md-6 col-xs-12">                                                                                           
                                            <select class="form-control select" name="rpop">
                                             <option value="<?php echo $record['room_popular'] ?>">
									 <?php 
									 $rp=$record['room_popular'];
									 if($rp==Y){
										 echo "Populer";
										 
									 }
									 else{
										 
										echo"Tak Populer";
									 }?>
									 
									 </option>
                                                  <option value="Y">Populer</option>
                                                
                                               
													
                                                <option value="N" >Tak Populer</option>
                                               
                                            </select>
                                          
                                        </div>
                                    </div>
                                   
                                
                                    
                                 
                                    
                                  
                                    
                                    
                                    
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Gambar</label>
                                        <div class="col-md-6 col-xs-12"> 
											<input type="file" class="fileinput btn-primary" name="foto" id="fileku" title="Browse file"/><br><br>
	<?php
							$gambar = $record[room_image];
								if($gambar==''){
									echo"
						
						<img src = 'http://placehold.it/1000x400' width='120px' height='90px'/> 
							
							
							";
						}
							else {
						echo"
						<img src='$gambar' width='120px' height='90px' />
							
							
							";
							}
							?>                                          
										  </div>
                                    </div>
								      <center><img id="loading" src="../assets/images/3.gif" /><!-- loading image --></center>	
                                </div>
                                
                               <div class="panel-footer" align="center">
                                  
                                    <button onclick="history.go(-1)" type="reset" class="btn btn-primary">Batal</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->  
       
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
        
        <script type="text/javascript" src="../assets/js/processing2.js"></script>          
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>


