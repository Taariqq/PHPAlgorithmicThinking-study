<?php

/*
 * enter grades from 4 tests and display the average
 */

echo 'Enter grade for Biology : ';
$biology = trim(fgets(STDIN));
echo 'Enter grade for Chemistry : ';
$chemistry = trim(fgets(STDIN));
echo 'Enter grade for Endocrinology : ';
$endocrinology = trim(fgets(STDIN));
echo 'Enter grade for Microbiology : ';
$microbiology = trim(fgets(STDIN));

$averageGrade = ($biology + $chemistry + $endocrinology 
  + $microbiology) / 4;

echo "Your average grade for Biology, Chemistry, Endocrinology and Microbiology"
. "is $averageGrade";