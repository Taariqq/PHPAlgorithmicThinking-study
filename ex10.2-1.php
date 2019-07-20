<?php

/*
 * Write a PHP script that prompts the  user to enter values for 
 * base and height and then calculates and displays the area
 * of a triangle.
 * 
 * Area = (height * base) / 2
 */

echo 'Please enter the value for the base of triangle : ';
$base = trim(fgets(STDIN));
echo 'Please enter the value for the height of triangle : ';
$height = trim(fgets(STDIN));

$area = ($base * $height) / 2;

echo "The area of the triangle, given the height of $height"
  . "and base of $base is $area";

