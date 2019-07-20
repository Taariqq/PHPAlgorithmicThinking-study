<?php

/*
 * prompt for value of radius then calculates and displays the perimeter of a
 * circle
 * Hint: circumference = 2 * pi * r
 *       area = pi * r * r
 */
define("PI", 3.14152); // constant

echo 'Please enter the radius of a circle : ';
$radius = trim(fgets(STDIN));

$circumference = 2 * PI * $radius;

echo "The perimeter of a circle, given the radius of $radius is "
  . "$circumference";


