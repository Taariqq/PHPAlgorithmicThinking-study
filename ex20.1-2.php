<?php

/*
 * prompt user for a number, and then display a message saying
 * "positive", "negative", or "zero", depending on whether the 
 * given number is greater, less or equal to zero
 */

echo 'Please enter a number : ';
$num = trim(fgets(STDIN));

if (is_numeric($num)) {
  if ($num > 0) {
    echo 'Positive';
  } elseif ($num < 0) {
    echo 'Negative';
  } else {
    echo 'Zero';
  }
} else {
  echo 'Please enter a numeric value.';
}

echo "\nNow a try with nested switch. \n";

if (is_numeric($num)) {
  switch ($num) {
    case 0:
      echo 'Zero';
      break;
    case ($num > 0):
      echo 'Positive';
      break;
    case ($num < 0):
      echo 'Negative';
  }
} else {
  echo 'Please enter a numeric value.';
}

/*
 * if one started with "switch(is_numeric($num))", and if the 
 * entered value is non-numeric, there won't be a way to display
 * a message?
 */