<?php
 $s="Hello world";
 echo "String is:",$s,"<br>";
 echo "String length:",strlen($s);
 $i=2;
 $j=4;
 echo "<br>Substring of starting index:$i and ending index:$j is:",substr($s,$i,$j);
 echo "<br>Upper case of $s:",strtoupper($s);
 echo "<br>Lower case of $s:",strtolower($s);
 $s1="world";
 echo "<br>Position of $s1 in $s is:",strpos($s,$s1);
?>