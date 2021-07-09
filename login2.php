<html>
<head>
<title>Login page</title>
</head>
<body>
<center>
<br>
<br>
<h1>
<?php
$connect=simplexml_load_file("login.xml");
$done=0;
$user=$_REQUEST["username"];
$pswd=$_REQUEST["password"];
foreach($connect->children() as $c)
 {
     if($user==$c->username && $pswd==$c->password)
     {
       echo"Successsfully logged in!!";
       $done=1;
       break;
     }
 }
if($done==0)
 echo" Sorry!!Error while logging in....";
?>
</h1>
</center>
</body>
</html>
