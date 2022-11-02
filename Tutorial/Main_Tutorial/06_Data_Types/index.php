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
    $arr0=array("HTML","CSS","JS",31,true,0.32,null,false);
    // echo $arr0[0];
    // using the short array syntax
    $arr1=["ROMAN","RAZZ"];
    // echo $arr1[1];
    // key=>value
    $arr2=array(
        "name"=>"ROMAN",
        "gender"=>"male",
    );
    echo $arr2["name"];

    // Object:
    // $obj=new <class_name>();

    // Null;
    $nl=null;

    // Function to check the datatype of that variable
    var_dump($string);
    // Out: string(11) "Hello world"
    var_dump($arr0);
    // Out: array(8) { [0]=> string(4) "HTML" [1]=> string(3) "CSS" [2]=> string(2) "JS" [3]=> int(31) [4]=> bool(true) [5]=> float(0.32) [6]=> NULL [7]=> bool(false) }
?>