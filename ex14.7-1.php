<?php
/*
 * prompt for first, middle, last names and title
 * and display them formatted in following ways.
 */
echo 'please enter your first name : ';
$fn = trim(fgets(STDIN));
echo 'last name : ';
$ln = trim(fgets(STDIN));
echo 'middle name : ';
$mn = trim(fgets(STDIN));
echo 'preferred title : ';
$title = trim(fgets(STDIN));

echo "$title. $fn $mn $ln\n";
echo "$fn $mn $ln\n";
echo "$ln, $fn\n";
echo "$ln, $fn $mn\n";
echo "$ln, $fn $mn, $title.\n";
echo "$fn $ln";
