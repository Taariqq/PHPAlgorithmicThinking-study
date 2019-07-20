<?php

/* program to convert from deg Fahrenheit to deg Kelvin */
// formula is 
# 1.8 x Kelvin = Fahrenheit + 459.67
# so .. Kelvin = (Fahrenheit + 459.67) / 1.8

define("NUM", 459.67);

echo "Please enter temp in Fahrenheit : ";
$F = trim(fgets(STDIN));

$K = ($F + NUM) / 1.8;

echo "$F Fahrenheit converted to Kelvin is $K degrees";


