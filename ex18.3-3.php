<?php

/*
 * let user input b/w -9999 & 9999, and then count total number of
 * digits. In the end, a message "you entered N-digit number" is 
 * displayed.
 */
echo 'please enter a number b/w -9999 and 9999 : ';
$int = trim(fgets(STDIN));

if ($int >= -9 && $int <= 9) {
  echo "you entered a 1-digit number \n";
} elseif ($int >= -99 && $int <= 99) {
  echo "you entered a 2-digit number \n";
} elseif ($int >= -999 && $int <= 999) {
  echo "you entered a 3-digit number \n";
} elseif ($int >= -9999 && $int <= 9999) {
  echo "you entered a 4-digit number \n";
}

echo "the entered number was $int";