<html>
<head>
<title> Calculator </title>
</head>
<body>
<?php
$a=$_REQUEST["num1"];
$b=$_REQUEST["num2"];
echo "<br>Numbers given are:$a and $b";
 if($_REQUEST["op"] == "Addition")
  {
  echo "<br>You selected Addition opertaion";
   echo"<br>result:",$a+$b;
  }
 if($_REQUEST["op"] == "Subtraction")
  {
   echo "<br>You selected Subtraction opertaion";
   echo"<br>result:",$a-$b;
  }
  if($_REQUEST["op"] == "Multiplication")
  {
   echo "<br>You selected Multiplication operation";
   echo"<br>result:",$a*$b;
  }
  if($_REQUEST["op"] == "Division")
  {
   echo "<br>You selected Division operation";
   echo"<br>result:",$a/$b;
  }
  if($_REQUEST["op"] == "Modulus")
  {
   echo "<br>You selected Modulus operation";
   echo"<br>result:",$a%$b;
  }
?>
</body>
</html>