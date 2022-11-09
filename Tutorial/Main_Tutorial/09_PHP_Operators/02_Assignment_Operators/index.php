<?php
    /*
        *) Assignment Operators:
            1) '='
                -> x = y
            2) '+='
                -> x += y (x = x + y)
            3) '-='
                -> x -= y (x = x - y)
            4) '*='
                -> x *= y (x = x * y)
            5) /=
            6) %=
            7) **=
    */

   $a=50;
   $b=30;

   $a += $b;
   echo $a,"<br/>";

   $a -= $b;
   echo $a,"<br/>";

   $a *= $b;
   echo $a,"<br/>";

   $a /= $b;
   echo $a,"<br/>";
   
   $a %= $b;
   echo $a,"<br/>";

   $a **= $b;
   echo $a,"<br/>";
?>