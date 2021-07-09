<html>
<head>
<title>Adding cookies</title>
</head>
<body>
<center>
<?php
$name=$_REQUEST["name"];
$value=$_REQUEST["val"];
setcookie($name,$value);
echo "Cookie added successfuly";
?>
</center>
</body>
</html>