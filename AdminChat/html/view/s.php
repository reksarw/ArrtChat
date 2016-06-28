<!DOCTYPE html>
<html lang="en">
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
<script language="javascript" > 
	
	function idleLogout() {
    var t;
    window.onload = resetTimer;
    window.onmousemove = resetTimer;
    window.onmousedown = resetTimer; // catches touchscreen presses
    window.onclick = resetTimer;     // catches touchpad clicks
    window.onscroll = resetTimer;    // catches scrolling with arrow keys
    window.onkeypress = resetTimer;

    function logout() {
        window.location.href = '?arrt=lockscreen';
    }

    function resetTimer() {
        clearTimeout(t);
        t = setTimeout(logout, 600000);  // time is in milliseconds //60000 = 1 minutes
    }
}
idleLogout();
</script>
    <body>
    <!-- START PAGE CONTAINER -->
        <div class="page-container">
     
            <!-- START PAGE SIDEBAR -->
                <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    
                    <li class="xn-profile">
						<?php
							$query = mysql_query("SELECT * FROM admin WHERE username = '$_SESSION[username]'");
							
							$data = mysql_fetch_object($query);
						?>
                        <a href="#" class="profile-mini">
                            <img src="../../images/<?php echo $data->gambar; ?>"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
								<img src="../../images/<?php echo $data->gambar; ?>"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $_SESSION['nickname'] ?></div>
                                <div class="profile-data-title"><?php echo $_SESSION['email'] ?></div>
                            </div>
                           
                        </div>                                                                        
                    </li>
                    
                    <li class="active">
                        <a href="?arrt"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">User</span></a>
                        <ul>
                            <li><a href="?arrt=user&u=i"><span class="fa fa-image"></span> Tambah</a></li>
                            <li><a href="?arrt=user"><span class="fa fa-user"></span> Daftar User</a></li>
                                              
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">ChatRoom</span></a>
                        <ul>
                            <li><a href="?arrt=room&r=i">Tambah </a></li>
                            <li><a href="?arrt=room">Daftar Room</a></li>
                           
                        </ul>
                    </li>
					
					  <li>
                        <a href="?arrt=message"><span class="fa fa-file-text-o"></span> <span class="xn-text">message</span></a>
                     
                    </li>
					  <li>
                        <a href="?arrt=online"><span class="fa fa-file-text-o"></span><span class="xn-text">Online</span></a>
                     
                    </li>
                     
				     <li class='xn-openable'>
                        <a href='#'><span class='glyphicon glyphicon-refresh'></span><span class='xn-text'>Database</span></a>
                        <ul>
                   
            <li >
                        <a href='?arrt=backup'>

    <span class='fa fa-download'></span> <span class='xn-text'>backup</span></a>                        
                    </li> <li >
                        <a href='?arrt=restore'><span class='fa fa-upload'></span></span> <span class='xn-text'>restore</span></a>                        
                    </li></ul></li>
            
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
       