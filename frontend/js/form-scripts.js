// Login Form
$("#loginForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Lengkapi data terlebih dahulu");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var username = $("#username").val();
    var password = $("#password").val();

    $.ajax({
        type: "POST",
        url: "core/private/login.php",
        data: "username=" + username + "&password=" + password,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#loginForm")[0].reset();
    submitMSG(true, "Message Submitted!")
}

function formError(){
    $("#loginForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}

// Register Form
$("#registerForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        registerError();
        registerMsg(false, "Lengkapi data terlebih dahulu");
    } else {
        // everything looks good!
        event.preventDefault();
        submitRegister();
    }
});


function submitRegister(){
    // Initiate Variables With Form Content
    var nama_lengkap = $("#nama_lengkap").val();
	var nama_pengguna = $("#nama_pengguna").val();
	var email = $("#email").val();
    var password = $("#pass").val();
	var jenis_kelamin = $('input:radio[name=jenis_kelamin]:checked').val();

    $.ajax({
        type: "POST",
        url: "core/private/register.php",
        data: "nama_lengkap=" + nama_lengkap + "&nama_pengguna=" + nama_pengguna + "&email=" + email + "&password=" + password + "&jenis_kelamin=" + jenis_kelamin ,
        success : function(text){
            if (text == "success"){
                registerSuccess();
            } else {
                registerError();
                registerMsg(false,text);
            }
        }
    });
}

function registerSuccess(){
    $("#registerForm")[0].reset();
    registerMsg(true, "Message Submitted!")
}

function registerError(){
    $("#registerForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function registerMsg(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgs").removeClass().addClass(msgClasses).text(msg);
}