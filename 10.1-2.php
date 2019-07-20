<?php



// find the area of a circle
// formula is pi x r x r

define("PI", 3.14159);

echo 'Please enter radius : ';
$r = trim(fgets(STDIN));

$area = PI * ($r * $r);

echo "Area of the circle with radius $r is $area";
