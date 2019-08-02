<?php
/*
 * prompt for two numbers. If the first number given is greater than
 * the second one, the script should swap their values. In the end,
 * the script should display the numbers, always in ascending order
 */

echo 'please enter two numbers :';
$n1 = trim(fgets(STDIN));
$n2 = trim(fgets(STDIN));

if ($n1 > $n2) {
  $temp = $n1;
  $n1 = $n2;
  $n2 = $temp;
}

echo "the numbers in ascending order are $n1 and $n2";