<?php
/*
 * prompt user for angle theta (in degrees) of a right triangle 
 * and the length of its adjacent side, and then calculate
 * the length of the opposite side.
 * Formula: pi*R = 180 deg
 * Formula: tan(theta) = Opposite / Adjacent
 */

echo 'please enter the angle (theta) of right triangle : ';
$angle = trim(fgets(STDIN));
echo 'please enter length of adjacent side of the '
. 'right triangle : ';
$adjacent = trim(fgets(STDIN));

/*
 *    tan(theta) = Opposite / Adjacent
 * => tan(theta) * Adjacent = Opposite

$opposite = tan($angle) * $adjacent;

echo "Given the angle of a right triangle of $angle and "
  . "the adjacent side of $adjacent, the opposite side"
  . "is $opposite";
 * 
 * I do not understand the way the formula is written in the 
 * solution. Will have to study it later. It is a mathematics
 * problem and not a programming problem so I will study it
 * later, in shaa Allaah. Here is a copy of the solution
*/

$opposite = tan($angle * pi() / 180) * $adjacent;

echo "the opposite side is $opposite";