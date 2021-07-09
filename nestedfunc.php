<?php
 $a="This is";
 echo "String is:$a";
 function inner(&$a)
 {
  $a=$a." my second";
  echo "<br>Inside the inner function string is:",$a;
  function outer(&$a)
  {
   $a=$a." Php lab";
   echo "<br>Inside the outer function string is:",$a;
  }
 }
 inner($a);
 outer($a);
 echo "<br>Finally the string:",$a;
?>
 
 