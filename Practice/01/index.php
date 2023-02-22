<?php
$names = ["roman", "razz", "harry"];
print_r($names);

$user = ["name" => "roman", "id" => 01, "gender" => "male"];
print($user["name"]);
echo "<br/>" . $user["name"] . " " . $user["id"] . " " . $user["gender"];

// constant
define("number", 10, false);
echo number;

// foreach
$names = array("roman", "razz", "harry");
echo "<br/>";
foreach ($names as $name) {
    echo $name . "<br/>";
}

// pass by reference
function increment(&$num)
{
    $num++;
}
$num = 10;
echo $num . "<br/>";
increment($num);
echo $num . "<br/>";
increment($num);
echo $num . "<br/>";
