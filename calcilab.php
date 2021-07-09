<html>
 <head>
  <title>
   Calculator
  </title>
 </head>
 <body>
   <?php
    echo"first operand ",$_REQUEST["num1"],"<br>second is ",$_REQUEST["num2"],"<br>operator ",$_REQUEST["op"],"<br>";
    $db = mysqli_connect("localhost","root","","18251A0535")or die("Could not connect");
    $query="select result from calci where num1={$_REQUEST["num1"]} and op like '{$_REQUEST["op"]}' num2={$_REQUEST["num2"]};"; 
    if ($result=mysqli_query($db,$query)){
      $rowcount=mysqli_num_rows($result);
       if($rowcount>=1){
          $row=mysqli_fetch_array($result);
          echo "The result of given operation is ",$row['result'];
       }
       else{
          $res=0;
          if($_REQUEST["op"]=='+')
           $res=$_REQUEST["num1"]+$_REQUEST["num2"];
          else if($_REQUEST["op"]=='-')
           $res=$_REQUEST["num1"]-$_REQUEST["num2"];
          else if($_REQUEST["operator"]=='*')
           $res=$_REQUEST["num1"]*$_REQUEST["num2"];
          else if($_REQUEST["operator"]=='/')
           $res=$_REQUEST["num1"]/$_REQUEST["num2"];
          else if($_REQUEST["operator"]=='%')
           $res=$_REQUEST["num1"]%$_REQUEST["num2"];
          
          echo "The result is: ",$res,"<br>";

          $query="insert into calculator (num1,num2,op,result) values ({$_REQUEST["num1"]},{$_REQUEST["op"]},'{$_REQUEST["num2"]}',$res);";
          if (mysqli_query($db, $query)) {
            echo "New record created successfully";
          }
          else {
            echo "Error: " . $query . "<br>" . mysqli_error($db);
          }
      }
   }       
   ?>
  </body>
</html>
