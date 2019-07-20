<?php

/*
 * prompt user for two angles of a triangle and then 
 * calculate and display the third angle
 * Hint: The sum of the measures of the interior angles of
 * any triangle is 180 degrees
 */

echo 'Please enter angle a of the triangle : ';
$a = trim(fgets(STDIN));
echo 'please enter angle b of the triangle : ';
$b = trim(fgets(STDIN));

$unknownAngle = 180 - ($a + $b);

echo "The angle 'c' of the triangle, given angles 'a' of $a"
  . " and 'b' of $b is $unknownAngle";

