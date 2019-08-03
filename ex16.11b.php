<?php
/*
 * prompt for two numbers. If the first number given is greater than
 * the second one, the script should swap their values. In the end,
 * the script should display the numbers, always in ascending order.\
 * Try w/ arrays: 
*/

echo 'please enter two numbers :';
$numInArray = array(trim(fgets (STDIN)));

echo "the numbers provided are \n";
echo print_r($numInArray);

echo "another example of print_r() \n";

$tryArray = array(1, 2, 4, 55, 999, 0123);

echo print_r($tryArray);