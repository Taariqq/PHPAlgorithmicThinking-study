<?php

/*
 * prompt for roman numerals from I to X, and then display the 
 * corresponding Arabic numeral. Wrong choice should generate 
 * an error.
 */

echo 'Please enter a Roman numeral between I and X : ';
$roman = trim(fgets(STDIN));

switch ($roman) {
  case "I":
    echo 'The corresponding Arabic numeral is 1';
    break;
  case "II":
    echo 'The corresponding Arabic numeral is 2';
    break;
  case "III":
    echo 'The corresponding Arabic numeral is 3';
    break;
  case "IV":
    echo 'The corresponding Arabic numeral is 4';
    break;
  case "V":
    echo 'The corresponding Arabic numeral is 5';
    break;
  case "VI":
    echo 'The corresponding Arabic numeral is 6';
    break;
  case "VII":
    echo 'The corresponding Arabic numeral is 7';
    break;
  case "VIII":
    echo 'The corresponding Arabic numeral is 8';
    break;
  case "IX":
    echo 'The corresponding Arabic numeral is 9';
    break;
  case "X":
    echo 'The corresponding Arabic numeral is 10';
    break;
  default:
    echo 'Please enter a valid choice between I and X Roman'
    . ' numerals to be converted to Arabic numeral.';
    break;
}