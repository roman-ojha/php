<?php
    /*
        *) Logical Operators:
            1) Logical AND => '&&'
            2) Logical OR => '||'
            3) Logical NOT => '!'
            4) Logical AND => 'and'
            5) Logical OR => 'or'
            6) Exclusive OR => 'xor'
    */

    if(true && false){
        echo "Logical AND";
    }

    if (!true){
        echo "Logical Not";
    }

    if (true || false){
        echo "Logical OR";
    }

    if (true xor false){
        echo "Exclusive OR";
    }

    if (true and false){
        echo "Logical AND";
    }

    if (true or false){
        echo "Logical OR";
    }
?>