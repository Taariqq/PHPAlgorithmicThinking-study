<?php


echo "Enter 1st value : ";
$a = trim(fgets(STDIN));
echo 'Enter 2nd value : ';
$b = trim(fgets(STDIN));

$average = ($a + $b) / 2;

echo 'The average value is : ', $average;