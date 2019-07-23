<?php

/*
 * write a php script that prompts the user to enter in one single
 * string both first and last names. In the end, the script
 * should change the order of the two names
 */

echo 'Please enter your first and last name : ';
$fullName = trim(fgets(STDIN));

// start by by finding the position of the space
echo 'space is at position ' . $space = strpos($fullName, " ");

// now try to split the string at that position
$lastName = substr($fullName, $space + 1); // to eliminate SPACE
$firstName = substr($fullName, 0, $space); // $space is a NUM

echo "\n last name is $lastName";
echo "\n first name is $firstName";