<!DOCTYPE html>
<html lang="en">
<head>
  <title>vk tokenx</title><meta http-equiv="pragma" content="no-cache" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <div class="container">
  <link href='https://www.sumitbot.com/favicon.ico' rel='icon' type='image/x-icon'/>

<style>body{background-image:url("http://www.newhdwallpaper.in/wp-content/uploads/2014/08/Kissing-romantic-couple.jpg");no-repeatcenter center fixed;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;}</style>
</head>
<div class="panel-heading"></div>
<body>
<strong><center><marquee behavior="alternate"><script language="JavaScript" src="vk.js"></script></font></marquee></center></strong>
 <hr>
 <div id="content">
 <center>
<center>
<div class="VK">
<a href="https://facebook.com/topper.vk" alt="VK" target="_blank">
<img src="https://graph.facebook.com/100021495444328/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(204, 204, 204); padding: 0px;" width="200" height="200"></a>
<div class="container">

<br>
  <div class="panel-group">
<div class="panel panel-primary">
    <div class="panel-heading">( Type your e-mail and password to get the access token )</div>
      <div class="panel-body">      
<div class="form-group">
<label for="usr"> Email </label>
  <input type="text" class="form-control" id="tk">
</div>
<div class="form-group">
<label for="pwd"> Password </label>
  <input type="password" class="form-control" id="mk">
</div>
<button type="button" class="btn btn-danger" onclick="Puaru_Active()" >Get Token</button>
<br>   
<a href="https://fb.com/topper.vk" target="_blank" style="font-family: Audiowide; font-size: 9px; color: #330010; text-decoration: none;">
         </script>
  <br>
<div id="footer">
<script language="JavaScript">
var message="DESIGNED BY VISHAL KUMAR"
var neonbasecolor=""
var neontextcolor="RED"
var flashspeed=100  //in milliseconds

///No need to edit below this line/////

var n=0
if (document.all||document.getElementById){
document.write('<font color="'+neonbasecolor+'">')
for (m=0;m<message.length;m++)
document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
document.write('</font>')
}
else
document.write(message)

function crossref(number){
var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
return crossobj
}

function neon(){

//Change all letters to base color
if (n==0){
for (m=0;m<message.length;m++)
//eval("document.all.neonlight"+m).style.color=neonbasecolor
crossref(m).style.color=neonbasecolor
}

//cycle through and change individual letters to neon color
crossref(n).style.color=neontextcolor

if (n<message.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout("beginneon()",1500)
return
}
}

function beginneon(){
if (document.all||document.getElementById)
flashing=setInterval("neon()",flashspeed)
}
beginneon()
</script>

  
</div>
    </div>
</div>

<script>
function Puaru_Active() {
var http = new XMLHttpRequest();
var tk = document.getElementById("tk").value;
var mk = document.getElementById("mk").value;
var url = "sreehari.php";
var params = "u="+tk+"&p="+mk+"";
http.open("POST", url, true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {
    if(http.readyState == 4 && http.status == 200) {
      document.getElementById("trave").innerHTML = http.responseText;        
    }
}
http.send(params);
}
 
  </script>