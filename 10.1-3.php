<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// miles per gallon of fuel
// mpg = miles driven / gallons of gas used

echo 'How many miles did you drive : ';
$miles = trim(fgets(STDIN));
echo 'How much did you pay per gallon of gas : ';
$price = trim(fgets(STDIN));

$mpg = $miles / $price;

echo "You are getting $mpg miles/gallon with $$price per gallon";