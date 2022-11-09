<?php
    $a=3;
    if($a==1){
        echo "a is 1";
    }elseif($a==2){
        echo "a is 2";
    }else{
        echo "either a is 1 nor 2";
    }

    if($a==1):
        echo "a is 1";
    elseif($a==2):
        echo "a is 2";
    else:
        echo "either a is 1 nor 2";
    endif;
?>