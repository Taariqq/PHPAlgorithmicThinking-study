<?php



// find the area of a parallelogram
// formula is area = base x height
echo 'Please enter value for base of the parallelogram : ';
$b = trim(fgets(STDIN));
echo 'Please enter value for height of the parallelogram : ';
$h = trim(fgets(STDIN));

$area = $b * $h;

echo 'The area of the parallelogram is ' . $area;
