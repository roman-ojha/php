<?php
    $cities=array("kathmandu","pokhara","dharan","damak","butwal");

    function printArray($i,$city="null"){
        return $i." = ".$city."<br/>";
    }

    for($i=0;$i<5;$i++){
       echo printArray($i,$cities[$i]);
    }
    echo printArray(6);
?>