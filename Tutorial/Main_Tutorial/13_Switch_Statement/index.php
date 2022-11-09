<?php
   $a=2;
   
    // First way
   switch($a){
    case 1: echo "a is 1";
    break;
    case 2: echo "a is 2";
    break;
    default : echo "either a is 1 nor 2";
    break;
   }

   switch(true){
    case ($a==1):
        echo "a is 1";
    break;
    case ($a==2):
        echo "a is 2";
    break;
    default : echo "either a is 1 nor 2";
    break;
   }

    // Second way    
   switch($a):
    case 1: case 2:
     echo "a is 1 or 2";
    break;
    break;
    default : echo "either a is 1 nor 2";
    break;
   endswitch;

?>