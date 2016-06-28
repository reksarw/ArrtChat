<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>ArrtChat - Chatting Online GRATIS</title>                 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
   <link rel="shortcut icon" href="../images/favicon.png">
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
               
                <div class="login-body">
                    <div class="login-title"><strong>Update</strong> Your Password</div>
                    <form action="?arrt=lost&c=submit_update_pass&id=<?php echo $_GET['id']?>" class="form-horizontal" method="post" enctype="multipart/form-data" >
							<input type="hidden" name="im2p" value="lost">
							<input type="hidden" name="c" value="submit_update_pass">
							<input type="hidden" name="id" value="<?php echo $_GET['id']?>">
						
                    <div class="form-group">
                        <div class="col-md-12">
                            <!--<input type="password" name="password1" required class="form-control"  placeholder="Password Baru"/>-->
                            <input type="password" class="form-control" name="password1" required class="validate[required]" placeholder="New Password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <!--<input type="password" name="password2" required class="form-control"  placeholder="Re- Password Baru" id="repeatPass" />-->
                            <input type="password" class="form-control" name="password2" required class="validate[required]" id="repeatPass" placeholder="Confirm Password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Login</button>
                        </div>
                    </div>
                    
                    </form>
                </div>
              </div>
            
        </div>
        
    </body>
</html>






