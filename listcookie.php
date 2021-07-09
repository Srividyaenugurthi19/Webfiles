<html>
<head>
<title>Listing cookies</title>
</head>
<body>
<center>
<h1>Listing cookies</h1>
<br>
<br>
<br>
<?php 
$cookie=$_COOKIE;
foreach ($cookie as $key=>$val)
echo "<br>$key : $val";
?>
</center>
</body>
</html>