<?php

/*
 * prompt user for last name and then create a login ID from the
 * first four letters of the name (in lowercase) and 
 * a three-digit random integer.
 */
echo 'please enter your last name : ';
$last = trim(fgets(STDIN));
/*
 * I can use tolower() to lowercase the first letter of the name
 * I can use substr() to chop the name to certain length
 * I can use rand() to generate random number
 * Use concatnation to join them together
 */
$lowerLast = strtolower($last);
echo "Last name in Lower case $lowerLast";
$letterPartID = substr($lowerLast, 0, 4); // 4 is number of character and not position!!
$numPartID = rand(100, 999); // rand(min, max)

echo "Your login ID is $letterPartID$numPartID";