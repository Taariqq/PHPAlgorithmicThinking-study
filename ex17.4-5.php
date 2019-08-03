<?php

/*
 * prompt for an integer, and then display one of two possible
 * messages. one message indicates if the given number is a multiple
 * of 6 or a multiple of 7; the other message indicates if the given
 * number is neither a multiple of 6 nor a multiple of 7.
 */
echo 'please enter an integer : ';
$int = trim(fgets(STDIN));

if ($int % 6 == 0) {
  echo "$int is a multiple of 6 \n";
} elseif ($int % 7 == 0) {
  echo "$int is a multiple of 7 \n";
} else {
  echo "$int is neither a multiple of 6 nor 7";
}

/*
 * can also use if (x % 6 == 0 || x % 7 == 0)
 */