<?php
 $a=8;
 $b=0;
 echo "Numbers are: $a and $b";
 
 $res=func($a,$b) or die ("<br>Error!! Change the numbers");
echo $res;
 function func($a,$b)
 {
   echo "<br>Sum of $a and $b:",$a+$b;
   echo "<br>Subtraction of $b from $a:",$a-$b;
   echo "<br>Multiplication of $a and $b:",$a*$b;
   if($b!=0)
   {echo "<br>Division of $a and $b:",$a/$b;
    echo "<br>Ececution is sucessful";
   return TRUE;
   }
  else
 return False;
   
 }
?>
 
