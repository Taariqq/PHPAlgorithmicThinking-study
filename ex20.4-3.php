<?php

/*
 * prompt for three sides of a triangle, and then determine whether
 * or not the given numbers can be lengths of the three sides of a
 * triangle. If the lengths are not valid, a corresponding message 
 * should be displayed; otherwise the script should further determine
 * whether the triangle is
 * a. equilateral i.e., all sides are equal, or
 * b. righ triangle, i.e., use pythagorean theorem, or
 * c. not special
 * Hint: In any triangle the length of each side is less than the
 * sum of the lengths of the other two sides.
 */

echo "Please enter the three sides of a triangle \n"
 . 'side A : ';
$A = trim(fgets(STDIN));
echo 'side B : ';
$B = trim(fgets(STDIN));
echo 'side C, the hypotenuse in case of right triangle : ';
$C = trim(fgets(STDIN));

if ($A < $B + $C && $B < $A + $C && $C < $A + $B) {
  if ($A == $B && $A == $C && $B == $C) { // for equilateral
    echo 'The given numbers are for an equilateral triangle.';
  } elseif (pow($C, 2) == pow($A, 2) + pow($B, 2)) { // for pythagorean
    echo 'The given numbers satisfy the requirements of a '
    . 'right triangle.';
  } else {
    echo 'Just a regular old tri-guy.';
  }
} else {
  echo "The given numbers $A, $B and $C can not be the three "
  . 'sides of a triangle.';
}

/*
 * not a complete solution. see ex20.4-3soln.php
 */