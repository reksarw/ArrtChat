<li class="active"><a href="?arrt=user">Daftar</a></li>
<li class="active"><a href="?arrt=user&u=i">Tambah user</a></li>
                </ul>

                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                           
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    
                                    <ul class="panel-controls">
                                         <strong>Daftar</strong> User
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
											<center>
                                            <tr>
												<th>Nickname</th>
                                                <th>Email</th>
												<th>Status</th>
                                                
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
										
										$record = user::datauser($h);
										if (is_array($record)) {
											foreach ($record as $row) {
												$nomor++;
									?>
                                    <tr  class="gradeA">
										<td><a href="?arrt=user&u=v&id=<?php echo "$row[user_id]"; ?>"><?php echo $row[nickname] ?></a></td>
										<td><a href="?arrt=user&u=v&id=<?php echo "$row[user_id]"; ?>"><?php echo $row[email] ?></a></td>
										<td><a href="?arrt=user&u=v&id=<?php echo "$row[user_id]"; ?>"><?php 
											$ol=$row[online];
											if($online=='Y'){
												echo"Online";
												
											}
											else{
												echo"Ofline";
												
											}
											
											
											 ?></a></td>
											
											
											<td><div align="center">
											
											
											<a href="?arrt=user&u=e&id=<?php echo "$row[user_id]"; ?>">
												 <span class="fa fa-pencil"></span>
												 </a>
												&nbsp;&nbsp;&nbsp;&nbsp;
												 
										<a href="?arrt=user&u=d&id=<?php echo "$row[user_id]"; ?>"
											onclick="return confirm('Apakah anda ingin menghapus')"> 
												 <span class="fa fa-trash-o"></span> </a>
                                            </div>
                                            </td>
										</tr>
									<?php }} ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                    </div>                                
                    
                </div>
                                   
            </div>    
          
        </div>
     
        <audio id="audio-alert" src="../assets/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="../assets/audio/fail.mp3" preload="auto"></audio>
     
        <script type="text/javascript" src="../assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/bootstrap/bootstrap.min.js"></script>        
       
        <script type='text/javascript' src='../assets/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="../assets/js/plugins/datatables/jquery.dataTables.min.js"></script>    
       
        <script type="text/javascript" src="../assets/js/settings.js"></script>
        
        <script type="text/javascript" src="../assets/js/plugins.js"></script>        
        <script type="text/javascript" src="../assets/js/actions.js"></script>        
   
        
    </body>
</html>
