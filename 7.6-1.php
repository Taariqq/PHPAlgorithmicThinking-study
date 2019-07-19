<?php
   echo 'First name please : ';
   $fn = trim(fgets(STDIN));
   echo 'Last name : ';
   $ln = trim(fgets(STDIN));
   // print concatenated names
   echo "$fn . $ln\n"; // prints First . Last
   echo '$fn' . '$ln'; // prints literal '$fn' '$ln'
   echo "\n$fn " . "$ln"; // should print appropriately

   $x = 0 % 5;
   echo $x;

   $y = 9 % 10;
   echo $y . "/n";

   $a = 4;
   $b = 5;
   $z = $a % $b;
   echo " the result of 4 % 5 is $z";
   echo phpinfo();