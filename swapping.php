<?php
 $a=55;
 $b=22;
 echo"<br> Before swapping: $a and $b";
 swap($a,$b);
 function swap(&$a,&$b)
 {
   $temp=$a;
   $a=$b;
   $b=$temp;
 }

 echo"<br> After swapping: $a and $b";
?>
