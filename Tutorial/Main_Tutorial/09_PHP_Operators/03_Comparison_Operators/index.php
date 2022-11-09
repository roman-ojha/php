<?php
    /*
        *) Comparison operators:
            -> return 'True/False' as if 'True' = "1", if 'False' = " ",

            1) Equal to => '=='
            2) Equal value and equal type => '==='
            3) Not equal => '!='
            4) Not equal => '<>'
            5) Not equal value or not equal type => '!=='
            6) Greater than => '>'
            7) Less than => '<'
            8) Greater than or equal to => '>='
            9) Less than or equal to => '<='
            10) Spaceship => '<=>'
                -> it returns -1,0 or 1 respectively less than, equal to, or greater than
    */

   $a=50;
   $b=30;

   $c=$a == $b;
   echo $c,"<br/>";

   $c=$a === $b;
   echo $c,"<br/>";

   $c=$a != $b;
   echo $c,"<br/>";

   $c=$a <> $b;
   echo $c,"<br/>";

   $c=$a !== $b;
   echo $c,"<br/>";

   $c=$a > $b;
   echo $c,"<br/>";

   $c=$a < $b;
   echo $c,"<br/>";

   $c=$a >= $b;
   echo $c,"<br/>";

   $c=$a <= $b;
   echo $c,"<br/>";

   $c=$a <=> $b;
   echo $c,"<br/>";
?>