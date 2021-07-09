<?php
 $a[0]=2;
 $a[1]=6;
 $a[2]=7;
 $a[3]=8;
 echo "Array:";
 print_r($a);
 sum($a);
 function sum(&$a)
 {
   $s=0;
  foreach($a as $i)
   $s+=$i;
  echo "<br>Sum:",$s;
 }
?> 
