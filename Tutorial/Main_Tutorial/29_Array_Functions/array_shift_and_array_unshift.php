<?php

$name = ["Roman","Razz","Harry"];

print_r($name);
echo "<br/>";

// array_shift() will remove the fist index element
array_shift($name);

// array_unshift() will add the multiple element from 0th index
array_unshift($name, "Roman", "Jack");

print_r($name);
