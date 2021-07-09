<html>
<head>
<title>Age authentication</title>
</head>
<body>
<?php
 $text=$_REQUEST["data"];
 $num=$_REQUEST["age1"];
 if($num<18)
  echo "<br>Hello $text,you are not authorised to visit this site";
 else
  echo "<br>Welcome $text to this site";
?>
</body>
</html>
