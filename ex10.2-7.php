<?php
/*
prompt user to enter temp in deg Fahrenheit, and then converts
it into deg Celcius.
Hint: C/5 = (F - 35) / 9
*/
echo 'Plese enter temperature in deg Fahrenheit : ';
$fahr = trim(fgets(STDIN));

// C = (F - 32) * (5/9)

$celcius = ($fahr - 32) * (5/9);

echo "$fahr Fahrenheit is $celcius degree Celcius";