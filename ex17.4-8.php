<?php

/*
 * prompt for 2 values, and then determines and displays the smaller
 * of the two values. 
 */

echo 'please enter value a : ';
$a = trim(fgets(STDIN));
echo 'please enter value b : ';
$b = trim(fgets(STDIN));

if ($a < $b) {
  echo "smaller number is $a \n";
} else {
  echo "smaller number is $b \n";  
}

echo "the numbers you entered were $a and $b respectively";