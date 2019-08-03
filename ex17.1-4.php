<?php

/*
 * check if the number is odd or even and display a message 
 * accordingly
 */

echo 'please enter a number :';
$oddEven = trim(fgets(STDIN));

if ($oddEven % 2) { // or if ($x % 2 == 0)
  echo 'the number is Odd'."\n";
} else {
  echo 'the number is Even'."\n";  
}

echo "the entered number was $oddEven";