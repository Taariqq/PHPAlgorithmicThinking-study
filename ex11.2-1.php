<?php

/*
 * prompt to enter coordinates (x,y) of two points and calculate the straight
 * line distance b/w them.
 * Formula: d = sqrt[(x1-x2)sq + (y1-y2)sq]
 */

echo 'please enter coordinates for point A : ';
$x1 = trim(fgets(STDIN));
$y1 = trim(fgets(STDIN));

echo 'please enter coordinates for point B : ';
$x2 = trim(fgets(STDIN));
$y2 = trim(fgets(STDIN));

$x_temp = pow($x1 - $x2, 2);
$y_temp = pow($y1 - $y2, 2);

$d = sqrt($x_temp + $y_temp);

echo "Distance between A and B is : $d";