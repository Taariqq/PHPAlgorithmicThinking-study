<?php

/*
 * Inside an automated teller machine (ATM) there are bills of $10,
 * $5 and $1. Write a PHP script to emulate the way this ATM works.
 * At the beginning the machine prompts the user to enter the 
 * four-digit PIN and then checks for PIN validity (assume "1234" as
 * the valid PIN. If given PIN is correct, the script should prompt
 * the user to enter the amount of money (an integer value) that
 * he or she wants to withdraw and finally it displays the least
 * number of bills the ATM should dispense. e.g., if the user enters
 * an amount of $36, the script should display "3 bills of $10, 1 
 * bill of $5, and 1 bill of $1". 
 * Moreover, if the user enters a wrong PIN, the machine will allow
 * them two retries. If the user enters an incorrect PIN all three
 * times, the message "PIN locked" should be displayed and the 
 * script should end.
 */

echo 'Please enter your PIN to log into the ATM : ';
$pin = trim(fgets(STDIN));


if ($pin != "1234") {
  echo 'Please enter your PIN again : ';
  $pin = trim(fgets(STDIN));
  if ($pin != "1234") {
    echo 'Last chance to enter correct PIN : ';
    $pin = trim(fgets(STDIN));
    if ($pin != "1234") {
      echo 'PIN locked!';
      exit();
    } else {
      echo 'Please enter the amount : ';
      $amt = trim(fgets(STDIN));
    }
  } else {
    echo 'Please enter the amount : ';
    $amt = trim(fgets(STDIN));
  }
} else {
  echo 'Please enter the amount : ';
  $amt = trim(fgets(STDIN));
}

$tens = intval($amt / 10);
$fives = intval(($amt - ($tens * 10)) / 5);
$ones = intval($amt - (($fives * 5) + ($tens * 10)) / 1);


echo "$$amt is $tens tens, $fives fives, and $ones ones";
