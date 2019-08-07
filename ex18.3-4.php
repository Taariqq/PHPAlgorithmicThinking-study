<?php

/*
 * display the currency conversion menu, then prompt to enter choice
 * for either EUR, GBP, JPY or CAD and the amount in USD and 
 * calculates and displays the required value.
 * USD = 0.72 EUR = 0.60 GBP = 102.15 JPY = 1.10 CAD
 */

echo "1. Convert USD to Euro (EUR) \n"
 . "2. Convert USD to British Pound Sterling (GBP) \n"
 . "3. Convert USD to Japanese Yen (JPY) \n"
 . "4. Convert USD to Canadian Dollar (CAD) \n"
  . "Please enter your choice b/w 1 and 4 : ";

$choice = trim(fgets(STDIN));

echo "please enter the amount to be converted in USD : ";
$amt = trim(fgets(STDIN));

//echo "you chose $choice";

if ($choice == 1) {
  $EUR = $amt * 0.72;
  echo "$amt USD converted to EUR is $EUR \n";
} elseif ($choice == 2) {
  $GBP = $amt * 0.60;
  echo "$amt USD converted to GBP is $GBP \n";
} elseif ($choice == 3) {
  $JPY = $amt * 102.15;
  echo "$amt USD converted to JPY in $JPY \n";
} elseif ($choice == 4) {
  $CAD = $amt * 1.10;
  echo "$amt USD converted to CAD is $CAD \n";
} else {
  echo "you need to choose between 1 and 4, please.";
}