<?php
 echo "Text to array conversion";
 $text="Mango Apple Banana papaya";
 echo "<br>String is: ",$text;
 $fruits=explode(" ",$text);
 echo "<br>Array is:";
 print_r($fruits);
 echo "<br>Array to text conversion";
 $cities[0]="Hyderabad";
 $cities[1]="Mumbai";
 $cities[2]="Chennai";
 echo "<br>Array is:";
 print_r($cities);
 $text1=implode(",",$cities);
 echo "<br>Text:",$text1;
?>

 