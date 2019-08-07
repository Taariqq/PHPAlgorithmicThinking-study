<?php

/*
 * prompt for a number b/w 1.0 and 4.9, and then displays the number
 * as English text. e.g. 2.3 displayed as "Two point three".
 */

echo 'please enter a number b/w 1.0 and 4.9 : ';
$float = trim(fgets(STDIN));

echo "number entered is $float \n";

if ($float[0] == 1) {
  echo "One ";
} elseif ($float[0] == 2) {
  echo "Two ";
} elseif ($float[0] == 3) {
  echo "Three ";
} elseif ($float[0] == 4) {
  echo "Four ";
}

if ($float[1] == ".") {
  echo "point ";
}

if ($float[2] == 0) {
  echo "zero";
} elseif ($float[2] == 1) {
  echo "one";
} elseif ($float[2] == 2) {
  echo "two";
} elseif ($float[2] == 3) {
  echo "three";
} elseif ($float[2] == 4) {
  echo "four";
} elseif ($float[2] == 5) {
  echo "five";
} elseif ($float[2] == 6) {
  echo "six";
}elseif ($float[2] == 7) {
  echo "seven";
} elseif ($float[2] == 8) {
  echo "eight";
}elseif ($float[2] == 9) {
  echo "nine";
}