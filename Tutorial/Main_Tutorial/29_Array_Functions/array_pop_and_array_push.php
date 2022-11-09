<?php

$name = ["Roman","Razz","Harry"];

print_r($name);
echo "<br/>";

// array_pop function will pop the element from the last index
array_pop($name);

// array_push function will push the multiple element to the last index
array_push($name, "Jack", "Tom");

print_r($name);
