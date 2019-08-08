<?php

/*
 * prompt to enter 0 - 9 in words, such as "one", "two", and so on,
 * and then print out the corresponding Arabic digit such as 0, 1, 2
 * and so on. Display "I don't know this number if user enters 
 * anything other than 0 - 9.
 */

echo 'Please enter "word" equivalant of numbers 0 - 9. e.g., "one"'
 . ' or "two" and so on : ';

$wordNum = trim(fgets(STDIN));

switch ($wordNum) {
  case "one":
    echo 'The arabic equivalent is 1';
    break;
  case "two":
    echo 'The arabic equivalent is 2';
    break;
  case "three":
    echo 'The arabic equivalent is 3';
    break;
  case "four":
    echo 'The arabic equivalent is 4';
    break;
  case "five":
    echo 'The arabic equivalent is 5';
    break;
  case "six":
    echo 'The arabic equivalent is 6';
    break;
  case "seven":
    echo 'The arabic equivalent is 7';
    break;
  case "eight":
    echo 'The arabic equivalent is 8';
    break;
  case "nine":
    echo 'The arabic equivalent is 9';
    break;
    case "zero":
      echo 'The arabic equivalent is 0';
      break;
  default:
    echo 'I do not know this number!';
    break;
}
