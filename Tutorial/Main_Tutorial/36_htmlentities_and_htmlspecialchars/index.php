<?php

    /*
        -> let's say that we had create a html form where use can enter message, and we can save that message into database
        -> but let's say rather then just entering string msg use will enter html tag or javascript code.
        -> if we will just try to save this msg into database, then hacker will try to hack that msg and the technique called 'SQL Injection' and also they can hack our database
        -> to not get attract by the hacker there is a function called 'htmlentities(<string>,<flags>)'
        -> now this function will convert all the special character into html entities code
        -> EX:
            -> original msg:
                -> <a href="https://www.youtube.com">Youtube</a>
            -> after applying function to this string:
                -> &It;a href=&quot;https://www.youtube.com&quot;&gt;Youtube&It;/a&gt;
        -> now we will save that encoded string into database
        -> now to convert that encoded string into original string we will apply 'html_entity_decode(<string>,<flags>)

    *) Flags:
        1. ENT_COMPAT:
            -> Default
            -> Encodes only double quotes
            -> also encodes all the special character
        2. ENT_QUOTES:
            -> Encodes double and single quotes
            -> also encode all the special character
        3. ENT_NOQUOTES:
            -> Doest not encode any quotes
            -> but encode all the spacial character

    *) htmlspecialchars():
        -> now this function will also work same as 'htmlentities()' function
        -> but this will convert only a limited number of characters
        -> to decode for this function we haver 'htmlspecialchars_decode()'

    *) the character that these function can decode:
        *) & => &amp;
        *) " => &quot;
        *) ' => &#039;
        *) < => &it;
        *) > => &gt;

    *) if you want to see these entity code in detail then we have a function for that as well:
            -> get_html_translation_table(<function>,<flags>)
                -> return array which will contain the list
            -> <function>:
                1. HTML_ENTITIES
                2. HTML_SPECIALCHARS
            ->
    */
