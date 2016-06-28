      </ul> <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
								 <?php $sql01="SELECT COUNT(user_id) AS jumlah FROM user";
									$query01=mysql_query($sql01) or die("select data pesan error :".mysql_error());
									$record01=mysql_fetch_array($query01); {
					?>                
                                    <div>                                    
                                        <div class="widget-title">Total User</div>                                                                        
                                        <div class="widget-subtitle"><?php echo $record01['jumlah']; ?></div>
                                        
                                    </div>
									<?php } ?>
									 <?php $sql1="SELECT COUNT(id) AS jumlah1 FROM online";
									$query1=mysql_query($sql1) or die("select data pesan error :".mysql_error());
									$record1=mysql_fetch_array($query1); {
					?>                
                                    <div>                                    
                                        <div class="widget-title">Jumlah Online</div>
                                        <div class="widget-subtitle"><?php echo $record1['jumlah1']; ?></div>
                                        
                                    </div>
								<?php } ?>
								 <?php $sql2="SELECT COUNT(room_id) AS jumlah FROM chatroom";
									$query2=mysql_query($sql2) or die("select data pesan error :".mysql_error());
									$record2=mysql_fetch_array($query2); {
					?>                
                                    <div>                                    
                                        <div class="widget-title">Jumlah Room</div>
                                        <div class="widget-subtitle"><?php echo $record2['jumlah']; ?></div>
                                        
                                    </div>
									<?php } ?>
                                </div>                            
                                                       
                            </div>         
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                        <div class="col-md-3">
                            
                          <div class="widget widget-default widget-item-icon" onclick="location.href='?arrt=backup';">
                                <div class="widget-item-left">
                                    

    <span class="fa fa-download"></span>
                                </div>                   
                           
                                <div class="widget-data">
                                    
                                    <div class="widget-title">Backup</div>
									 <div class="widget-title">Database</div>
									  <div class="widget-subtitle">Mengamankan Database Bila terjadi kesalahan di daerah database</div>
                                    
                                </div>      
                               
                            </div>
                        </div>
              <div class="col-md-3">
                            
                          <div class="widget widget-default widget-item-icon" onclick="location.href='?arrt=restore';">
                                <div class="widget-item-left">
                                    

    <span class="fa fa-upload"></span>
                                </div>                   
                           
                                <div class="widget-data">
                                    
                                    <div class="widget-title">Restore</div>
									 <div class="widget-title">Database</div>
                                    <div class="widget-subtitle">Memasukan Data Database untuk mengamankan data lama yang telah terhapus</div>
                                </div>      
                               
                            </div>
                        </div>
           <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-danger widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                                      
                                           
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->                    
                    
                   
                    <div class="row">
              
<div class="col-md-10>
 
                            <div class="panel panel-default" style="height: 390px;">
                                <div class="panel-body panel-body-map">
                                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.3219904813645!2d112.9083292!3d-7.648483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7c609ad832b4b%3A0xbfd96addd3589ad4!2sJl.+Pahlawan+No.28%2C+Bugulkidul%2C+Kota+Pasuruan%2C+Jawa+Tim.+67126!5e0!3m2!1sid!2sid!4v1429517363612" width="100%" height="200" frameborder="0" style="border:0"></iframe>
                                </div>
                                <div class="panel-body">
                                    <h1><span class="fa fa-map-marker"></span> ArrtChat Foundation™</h1>
                                    <p>Jl.Brantas nomer golek dewe </p>
                                </div>
                            </div> </div> 

        </div>
                    
                  