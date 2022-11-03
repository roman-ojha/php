<?php
    $i=0;
    loop:
    if($i<5){
        echo $i;
        $i++;
        goto loop;
    }else{
        goto endLoop;
    }
    endLoop:
?>