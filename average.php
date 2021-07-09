<?php
 $a[0]=5;
 $a[1]=1;
 $a[2]=7;
 $a[3]=8;
 $sum=0;
 echo"<br>Given array:";
 for($i=0;$i<4;$i++)
 {  echo " ",$a[$i];
    $sum+=$a[$i];
 }
 $avg=$sum/4;
 echo "<br>Average of given array elements:",$avg;
?>

 
