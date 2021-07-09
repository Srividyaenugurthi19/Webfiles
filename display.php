
<?php
$a=$_REQUEST["name"];
$b=$_REQUEST["fullname"];
$c=$_REQUEST["password"];
$con=mysqli_connect("localhost","root","") or die("Could not connet to server");
$db=mysqli_select_db($con,"18251A0535") or die("query failed:".mysql_error());

$query ="insert into login1 values('$a','$b','$c')";
	
	$result= mysqli_query($con,$query) or die("query failed:".mysql_error());
	
	echo "$a, You are Registered Succesfully";
?>