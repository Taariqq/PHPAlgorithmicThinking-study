<?php

/*
 * Athletes in the long jump at the Athens 2004 Olympic Games
 * participated in three different qualifying jumps. Assume that
 * in order to qualify, an athlete had to achieve an average jump
 * distance of 8 meters.
 * Write a PHP script that prompts the user to enter the three 
 * performances and then dsiplays the messsage "Qualified" or 
 * "Disqualified" depending on whether the average value is greater
 * or less than 8 meters.
 */

echo 'please enter distance of jump one : ';
$jOne = trim(fgets(STDIN));
echo 'please enter distance of jump two : ';
$jTwo = trim(fgets(STDIN));
echo 'please enter distance of jump three : ';
$jThree = trim(fgets(STDIN));

$jAvg = ($jOne + $jTwo + $jThree) / 3;

if ($jAvg >= 8) {
  echo "Qualified \n";
} else {
  echo "Disqualified \n";  
}

echo "the 3 jump distance average was $jAvg";