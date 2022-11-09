<?php

    /*
        => 'Md5' & 'Sha1' are the function in php that will help to encrypt string
        -> most of the case we can use these algorithm to encrypt password and store it into database
        *) md5(<string>,<raw>):
            -> Uses 'MD5 Message-Digest Algorithm'
            -> <raw>:
                1. TRUE
                    -> Raw 16 character binary format
                2. FALSE
                    -> Default.
                    -> 32 character hex number

        *) Sha1(<string>,<raw>):
            -> Uses 'US Secure Hash Algorithm 1'
            -> <raw>:
                1. TRUE
                    -> Raw 20 character binary format
                2. FALSE
                    -> Default.
                    -> 40 character hex number
    */

    $password="Roman";
    echo $password.'<br/>';
    // Output: Roman

    echo md5($password).'<br/>';
    // Output: b5df36ac79aa6391ffb432b9e5ad7880

    echo md5($password, true)."<br/>";
    // Output: ��6�y�c���2��x�


    echo sha1($password).'<br/>';
    // Output: 396bd07890bc77d98cce08898143095a50e943a4

    echo sha1($password, true).'<br/>';
    // Output: 9k�x��wٌ���C ZP�C�
