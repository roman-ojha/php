<?php
    // Data types:
    // String:
    $string="Hello world";

    // Integer:
    $integer=25;

    // Float 
    $float=-23.53;

    // Boolean:
    $bool=true;

    // Array:
    $arr=array("HTML","CSS","JS",31,true,0.32,null,false);
    echo $arr[0];

    // Object:
    // $obj=new <class_name>();

    // Null;
    $nl=null;

    // Function to check the datatype of that variable
    var_dump($string);
    // Out: string(11) "Hello world"
    var_dump($arr);
    // Out: array(8) { [0]=> string(4) "HTML" [1]=> string(3) "CSS" [2]=> string(2) "JS" [3]=> int(31) [4]=> bool(true) [5]=> float(0.32) [6]=> NULL [7]=> bool(false) }
?>