<html>
 <head>
  <title>Login page</title>
 </head>
 <body>
   <?php
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "18251A0535");
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query="select * from login where username like '{$_REQUEST['username']}' and password like '{$_REQUEST['password']}';";
    if ($result=mysqli_query($db,$query))
    {
       $rowcount=mysqli_num_rows($result);
       if($rowcount>=1){
          echo "Welcome ",$_REQUEST['username'],", to the website";
       }
       else{
          echo "User does not exist!!!!! Please relogin with correct credentials";
       }
  }
 
   ?>
 </body>
</html>