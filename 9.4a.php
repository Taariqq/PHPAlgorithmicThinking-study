<?php

$s = 0;
echo 'Enter 1st value :';
$a = trim(fgets(STDIN));
echo 'Enter 2nd value :';
$b = trim(fgets(STDIN));
$s = $a + $b;

echo "The sum is : ", $s;


?>