<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// find the area of a circle
// formula is pi x r x r

define("PI", 3.14159);

echo 'Please enter radius : ';
$r = trim(fgets(STDIN));

$area = PI * ($r * $r);

echo "Area of the circle with radius $r is $area";
