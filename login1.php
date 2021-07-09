<html>
 <head>
  <title>Login page</title>
 </head>
 <body>
   <?php
    $con=mysqli_connect("localhost","root","") or die("Could not connet to server");
    $db=mysqli_select_db($con,"18251A0535") or die("query failed:".mysql_error());
    $query="select * from login1";
$result=mysqli_query($con,$query) or die("Query failed:".mysql_error());
$name=$_REQUEST["name"];
$flag=0;
while($row=mysqli_fetch_array($result))
{
if($row['name']==$_REQUEST["name"]  &&  $row['password']==$_REQUEST["password"])
{
	echo "Welcome $name <br> You are successfully loged in <br> ";
	$flag=1;
	break;
}	
else if($row['name']==$_REQUEST["name"]  &&  $row['password']!=$_REQUEST["password"])
{
	echo "Sorry We could not login . Password Mismatch";
	$flag=1;
	break;
}	
}

if($flag==0)
{
	
    echo " Could not find you. Enter details to login <br> ";
    echo " Enter name full name and password";	
    include "display.html";
	
}

mysqli_close($con);
?>
</body>
</html>
 
