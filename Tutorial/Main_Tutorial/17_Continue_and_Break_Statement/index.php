<?php
    for($i=0;$i<100;$i++){
        if($i%2==0){
            continue;
        }elseif($i==11){
            break;
        }
        echo $i;
    }
    
?>