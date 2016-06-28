<?php
					session_destroy();
?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        
	<title>ArrtChat - Chatting Online GRATIS</title>              
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="../../images/favicon.png">
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="../assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
               
                <div class="login-body">
									<?php
				$r2="select * from admin where id = $_SESSION[id]";
				$q2=mysql_query($r2) or die (mysql_error());
				$f2=mysql_fetch_array($q2);
				?>
				<?php
						$ids=$_SESSION['id'];
						$sql="SELECT * FROM admin WHERE id='$ids'";
								$query=mysql_query($sql) or die (mysql_error());
								while ($row=mysql_fetch_array($query)){
									
									?>
                    <li class="xn-profile">
                        <a href="?arrt=user&tnt=se&id=<?php echo $row['id']; ?>" class="profile-mini">
                            
                        </a>
                        <div class="profile">
                                <?php
							$direktori = $f2['gambar'];
								if($direktori==''){	
						echo"
						<div class='profile-image'>
						<img src='../../images/$f2[gambar]'>   
						</div>";}
							else {
						echo"<div class='profile-image'>
						 $directori
						</div>";}
							?>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $row[nickname]; ?></div>
                                <div class="profile-data-title"><?php echo $row[email]; ?></div>
                            </div>
                        </div>                                                                        
                    </li>
                    <?php } ?>
        
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    <form action="../php/class/ck1.php" method="post" id="valid" class="form-horizontal" enctype="multipart/form-data">
						
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="hidden" class="form-control" placeholder="Username" name="username" value="<?php echo $_SESSION['username'] ?>"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
						<div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password" name="password"/>
                        </div>
                    </div>
                    
                        
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Log In</button>
                        </div>
                        
                    </div>
                    </form>
                </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>






