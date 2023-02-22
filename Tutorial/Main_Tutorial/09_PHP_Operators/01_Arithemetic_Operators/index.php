<?php
/*
        *) Arithmetic operator:
            1) Addition => '+'
            2) Subtraction => '-'
            3) Multiplication => '*'
            4) Exponentiation => '**'
            5) Division => '/'
            6) Modules (Remainder) => '%'
            7) Increment Operator => '++'
            8) Decrement Operator => '--'
   */

$a = 50;
$b = 30;

$c = $a + $b;
echo $c, "<br/>";

$c = $a - $b;
echo $c, "<br/>";

$c = $a * $b;
echo $c, "<br/>";

$c = $a / $b;
echo $c, "<br/>";

$c = $a % $b;
echo $c, "<br/>";

$c = $a ** $b;
echo $c, "<br/>";

// Pre-increment: Increments $a by one, then returns $a
$c = ++$a;
echo $c, "<br/>";

// Post-increment: Returns $a, then increments $a by one
$c = $a++;
echo $c, "<br/>";

$c = --$a;
echo $c, "<br/>";

$c = $a--;
echo $c, "<br/>";

$c = ($a + $b) * 2;
echo $c, "<br/>";
