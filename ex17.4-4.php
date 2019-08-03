<?php

/*
 * prompt for an int and then displays a message indicating whether
 * or not the given number is a miltiple of 6.
 */

echo 'please enter an integer : ';
$int = trim(fgets(STDIN));

if ($int % 6 == 0) {
  echo "the number is a multiple of 6 \n";
} else {
  echo "the number is not a multiple of 6 \n";
}

echo "the entered integer was $int";