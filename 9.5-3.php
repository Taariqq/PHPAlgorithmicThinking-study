<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$b = trim(fgets(STDIN));

$c = 5;
$c = $c * $b;
$a = 10 * $c % 10;

echo $a;