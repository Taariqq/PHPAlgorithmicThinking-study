<?php
/*
 * Write a PHP script that prompts to enter full name and then
 * creates a secret password consisting of three letters
 * (in lowercase), randomly picked up from his or her name, and
 * a random four-digit number.
 */
echo 'please enter your full name : ';
$fullName = trim(fgets(STDIN));

// for a 4 digit random number
$randNum = rand(1000, 9999);

// to pick 3 letters from the name
# echo strtolower(substr($fullName, rand(0, ), 3));

// substr($string, $start, $length)
# try to break the problem down
// pick 3 letters from name, which is a string $fullName
# first, to get rid of the white space
echo $fullName . "\n";
echo $noSpaceFullName = strtolower(str_replace(" ", "", $fullName)). "\n";


//echo $threeLetters = $noSpaceFullName[rand(0, $noSpaceFullName - 1)];
//  .$noSpaceFullName[rand($noSpaceFullName -1)]
//  .$noSpaceFullName[rand($noSpaceFullName -1)];
$three = $noSpaceFullName[rand(0, strlen($noSpaceFullName) - 1)]
  .$noSpaceFullName[rand(0, strlen($noSpaceFullName) - 1)]
  .$noSpaceFullName[rand(0, strlen($noSpaceFullName) - 1)];

## Q: how to write a substr() that starts at a random point?!
## A: No need! You can use 3 elements of [] and use strlen

echo "Secrect password is ". $secretPassword = $three.$randNum;

// still buggy ... occassionally the letters show up as 2, with
// a newline character or something?!