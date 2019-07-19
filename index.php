<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$s = 0;
echo 'Enter 1st value :';
$a = trim(fgets(STDIN));
echo 'Enter 2nd value :';
$b = trim(fgets(STDIN));
$S = $a + $b;

echo "The sum is : ", $s;

echo phpinfo();

?>