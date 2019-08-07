<?php

/*
 * prompt for 3 numbers, and then display a message indicating whether
 * or not the given numbers can be lengths of the three sides of a
 * right triangle (or a right-angled triangle). Use lengths of 3, 4 
 * and 5 to test your script.
 * Hint: Use the Pythagorean theorem.
 * pow($c, 2) = pow($a, 2) + pow($b, 2)
 */
echo 'please enter value for side a of right triangle : ';
$a = trim(fgets(STDIN));
echo 'please enter value for side b of right triangle : ';
$b = trim(fgets(STDIN));
echo 'please enter value for side c of right triangle : ';
$c = trim(fgets(STDIN));

if ($c == (sqrt(pow($a, 2) + pow($b, 2)))
  && $b == (sqrt(pow($c, 2) - pow($a, 2)))
  && $a == (sqrt(pow($c, 2) - pow($b, 2)))) {
  echo "the given numbers can be the lengths of the three sides"
  . " of a right triangle \n";
} else {
echo "the numbers don't add up for a right triangle \n"  ;
}

echo "the entered values are $c, $b and $a";