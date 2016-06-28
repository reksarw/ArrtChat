//Skirp yang wajib ada jika ingin menggunakan AJAX
function GetXmlHttpObject()
{
var xmlHttp;
 
try
    {
    // Firefox, Opera 8.0+, Safari
    xmlHttp = new XMLHttpRequest();
    }
catch (e)
    {
    //Internet Explorer
    try
        {
        xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        }
    catch (e)
        {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
 
return xmlHttp;
}

function cekOnline()
{
xmlHttp = GetXmlHttpObject();
 
if (xmlHttp == null)
{
    alert("Browser Anda Tidak Mendukung HTTP Request");
    return;
}
 
var url = "../core/private/online.php";
xmlHttp.open("POST", url, true);
xmlHttp.onreadystatechange = stateChanged;
xmlHttp.send(null);
}
 
function stateChanged()
{
if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0)
    {
    var hitung = xmlHttp.responseText;
    document.getElementById("onlineUser").innerHTML = hitung;
    window.setTimeout("cekOnline();", 2000);
    }
}
 
function online()
{
online = GetXmlHttpObject();
 
if (online == null)
{
	alert("Browser Anda Tidak Mendukung HTTP Request");
	return;
}
 
var url = "../core/private/in.php";
online.open("POST", url, true);
online.onreadystatechange = responeOnline;
online.send(null);
}
 

function responeOnline()
{
if (online.readyState == 4 || online.readyState == 0)
    {
    cekOnline();
    }
}
         
function exit()
{
exit = GetXmlHttpObject();
 
if (exit == null)
{
    alert("Browser Tidak Support HTTP Request");
    return;
}
 
var url = "../core/private/out.php";
exit.open("POST", url, true);
exit.send(null);
}

function user_load(){
user_load = GetXmlHttpObject();
 
if (user_load == null)
{
    alert("Browser Tidak Support HTTP Request");
    return;
}
 
var url = "core/private/out.php";
user_load.open("POST", url, true);
user_load.send(null);
}

function index_load(){
index_load = GetXmlHttpObject();
 
if (index_load == null)
{
    alert("Browser Tidak Support HTTP Request");
    return;
}
 
var url = "core/private/index_load.php";
index_load.open("POST", url, true);
index_load.send(null);
}