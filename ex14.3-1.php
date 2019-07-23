<?php

/*
 * prompt user to enter a 5 letter word and then 
 * print it backwards
 */
echo 'please enter a five letter word : ';
$five = trim(fgets(STDIN));
echo "\n You entered $five \n";
echo "Your entered word in reverser is "
. "$five[4]$five[3]$five[2]$five[1]$five[0] ";
echo "String position is " . strpos($five, "l") . "\n";

echo "Substring is " . substr($five, 0, 4);
echo "\n Substring is " . substr($five, 1,);