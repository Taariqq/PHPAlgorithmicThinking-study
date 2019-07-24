<?php
/*
 * write a php script that creates a random word consisting of 
 * five letters
 * Hint: create an array of all alphabets
 * then use rand() on the array elements
 */
// generate an array of english alphabets
//$alphabets = ["a","b","c","d","e","f","g","h","i","j","k","l",
//  "m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
//print_r($alphabets);
//
//// now to print the array elements randomly
//// echo rand($alphabets, $alphabets[25]); not working
//# must be doable by a loop, but they have not been introduced yet
//
//// idea: use rand to generate a number b/w 0 and 25 and feed
//// that into the array
//
////echo "$alphabets[rand(0, 25)], [rand(0, 25)], [rand(0, 25)],
////  [rand(0, 25)], [rand(0, 25)]";
//
//echo "$alphabets[5]";
//echo "$alphabets"
# array solution not working and is not introduces yet
# let's try the same with string

$alphabets = ("a"."b"."c"."d"."e"."f"."g"."h"."i"."j"."k".
  "l"."m"."n"."o"."p"."q"."r"."s"."t"."u"."v"."w"."x"."y"."z");
print_r($alphabets);
echo "\n".$alphabets[2]."\n";

$alphaString = "abcdefghijklmnopqrstuvwxyz";
print_r($alphaString);
echo "\n".$alphaString[13]."\n";

echo $alphaString[rand(0, 25)].$alphaString[rand(0, 25)]
  .$alphaString[rand(0, 25)].$alphaString[rand(0, 25)]
  .$alphaString[rand(0, 25)];

/*
 * or you could
 * $rand_word = $alphaString[rand(0, 25] . ....
 * an then
 * echo $rand_word;
 */

