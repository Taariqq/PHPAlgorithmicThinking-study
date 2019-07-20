<?php
/*
BMI. prompt user to enter weight in pounds and height in inches
and then calculate and display user's BMI
*/
echo 'please enter your weight in pounds : ';
$weight = trim(fgets(STDIN));
echo 'now enter your height in inches : ';
$height = trim(fgets(STDIN));

$BMI = ($weight * 703) / ($height * $height);

echo "Given your weight of $weight pounds and a height of $height
inches, your BMI is $BMI";