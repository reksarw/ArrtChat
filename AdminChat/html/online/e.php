<li class="active">Edit user</li>
                </ul>
<!-- PAGE CONTENT WRAPPER -->
        <link rel="stylesheet" type="text/css" href="../assets/css/proses.css">
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                           
                          <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    
                                    <ul class="panel-controls">
                                         <strong>Edit</strong> User
                                    </ul>                                
                                </div>
								
                          <form class="form-horizontal" action="" method="post" role="form" enctype="multipart/form-data" >
                               <input type="hidden" name="arrt" value="user" />
							<input type="hidden" name="u" value="edit" />
							<input type="hidden" name="id" value="<?php echo $record[user_id]?>" />
							
                           
                                <div class="panel-body">                                                                        
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nickname</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="nickname" value="<?php echo $record[nickname]?>" />
                                            </div>                                            
                                           
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Username</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="username" value="<?php echo $record[username]?>" />
                                            </div>                                            
                                            
                                        </div>
                                    </div>
                                       <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">E-mail:</label>                                        
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="email" value="<?php echo $record[email]?>"/>                                        
                                            <span class="help-block">Ex : email@yahoo.co.id</span>
                                        </div>
                                    </div> 
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" class="form-control" name="password" />
                                            </div>            
                                           
                                        </div>
                                    </div>
								                         <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Konfirmasi Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                                                <input type="password" class="form-control" id="repeatPass"  name="password1"/>
                                            </div>            
                                          
                                        </div>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Jenis Kelamin</label>
                                        <div class="col-md-6 col-xs-12">                                                                                           
                                            <select class="form-control select" name="jk">
                                              
									 <option value="<?php echo $record['jenis_kelamin'] ?>">
									 <?php 
									 $jk=$record['jenis_kelamin'];
									 if($jk==L){
										 echo "Laki-Laki";
										 
									 }
									 else{
										 
										echo"Perempuan";
									 }?>
									 
									 </option>
											 <option value="L">Laki-Laki</option>
                                                
                                               
													
                                                <option value="P" >Perempuan</option>
                                                
                                               
                                            </select>
                                          
                                        </div>
                                    </div>
                                   
                                
                                    
                                 
                                    
                                  
                                    
                                    
                                    
						       <label class="col-md-3 col-xs-12 control-label">Gambar</label>
                                        <div class="col-md-6 col-xs-12"> <div class="form-group">
										<input type="file" class="fileinput btn-primary" name="foto" id="fileku" title="Browse file"/><br><br>
						<?php
							$gambar = $record[gambar];
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
                                    <button class="btn btn-success" type="submit">Masukan</button> 
                                    <button onclick="history.go(-1)" type="reset" class="btn btn-primary">Batal</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>      </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->  
       
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


