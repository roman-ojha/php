<?php

    /*
        *) array_keys()
            -> this will return all the keys into new array
        *) array_key_first()
            -> this will return first key from the array
        *) array_key_last()
            -> this will return last key from the array
        *) array_key_exists()
            -> to check does given key exist in array or not
        *) key_exist()
            -> to check does given key exist in array or not
    */

    $user=[
        "name"=>"roman",
        "id"=>13,
        "roll"=>25,
        "gender"=>"name",
    ];

    $arrayKeys=array_keys($user);
    echo "<pre>";
    print_r($arrayKeys);
    echo "</pre>";
    /*
        Output:
        Array
        (
            [0] => name
            [1] => id
            [2] => roll
            [3] => gender
        )
    */

    $arrayKyeFirst=array_key_first($user);
    echo $arrayKyeFirst."<br/>";

    $arrayKyeLast=array_key_last($user);
    echo $arrayKyeLast."<br/>";

    $arrayKeyExist=array_key_exists("name", $user);
    // return 1
    echo $arrayKeyExist."<br/>";

    $keyExist=key_exists("hello", $user);
    echo $keyExist."<br/>";
