<?php

/*
 * prompt user for 3 numbers, and then displays a message indicating
 * whether or not the given number can be lengths of the three sides
 * of a triangle.
 * Hint: In any triangle, the length of each side is less than the
 * sum of the lengths of the other two sides.
 */

echo 'please enter value for a : ';
$a = trim(fgets(STDIN));
echo 'please enter value for b : ';
$b = trim(fgets(STDIN));
echo 'please enter value for c : ';
$c = trim(fgets(STDIN));

if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) {
  echo 'the given numbers can be lengths of the three sides of a '
  . 'triangle'; 
} else {
  echo 'the sides don\'t add up to be the three sides of a '
  . 'triangle';  
}

echo "the three measurements provided were $a, $b, and $c";