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

    $str="<a href='https://www.youtube.com'>Youtube</a>";
    echo $str."<br/>";
    // Output: Youtube

    // htmlentities():
    $strHtmlEntity=htmlentities($str, ENT_QUOTES);
    echo $strHtmlEntity."<br/>";
    // Output: &lt;a href=&#039;https://www.youtube.com&#039;&gt;Youtube&lt;/a&gt;
    $strHtmlEntity=htmlentities($str, ENT_NOQUOTES);
    $strHtmlEntity=htmlentities($str, ENT_COMPAT);

    echo html_entity_decode($strHtmlEntity).'<br/>';

    // htmlspecialchars():
    $strHtmlSpecialChars=htmlspecialchars($str, ENT_QUOTES);
    echo $strHtmlSpecialChars."<br/>";
    echo htmlspecialchars_decode($strHtmlSpecialChars);

    // get_html_translation_table():
    echo "<pre>";
    print_r(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES));
    echo "</pre>";
    /*
        Output:
        Array
        (
            ["] => &quot;
            [&] => &amp;
            ['] => &#039;
            [<] => &lt;
            [>] => &gt;
            [ ] => &nbsp;
            [??] => &iexcl;
            [??] => &cent;
            [??] => &pound;
            [??] => &curren;
            [??] => &yen;
            [??] => &brvbar;
            [??] => &sect;
            [??] => &uml;
            [??] => &copy;
            [??] => &ordf;
            [??] => &laquo;
            [??] => &not;
            [??] => &shy;
            [??] => &reg;
            [??] => &macr;
            [??] => &deg;
            [??] => &plusmn;
            [??] => &sup2;
            [??] => &sup3;
            [??] => &acute;
            [??] => &micro;
            [??] => &para;
            [??] => &middot;
            [??] => &cedil;
            [??] => &sup1;
            [??] => &ordm;
            [??] => &raquo;
            [??] => &frac14;
            [??] => &frac12;
            [??] => &frac34;
            [??] => &iquest;
            [??] => &Agrave;
            [??] => &Aacute;
            [??] => &Acirc;
            [??] => &Atilde;
            [??] => &Auml;
            [??] => &Aring;
            [??] => &AElig;
            [??] => &Ccedil;
            [??] => &Egrave;
            [??] => &Eacute;
            [??] => &Ecirc;
            [??] => &Euml;
            [??] => &Igrave;
            [??] => &Iacute;
            [??] => &Icirc;
            [??] => &Iuml;
            [??] => &ETH;
            [??] => &Ntilde;
            [??] => &Ograve;
            [??] => &Oacute;
            [??] => &Ocirc;
            [??] => &Otilde;
            [??] => &Ouml;
            [??] => &times;
            [??] => &Oslash;
            [??] => &Ugrave;
            [??] => &Uacute;
            [??] => &Ucirc;
            [??] => &Uuml;
            [??] => &Yacute;
            [??] => &THORN;
            [??] => &szlig;
            [??] => &agrave;
            [??] => &aacute;
            [??] => &acirc;
            [??] => &atilde;
            [??] => &auml;
            [??] => &aring;
            [??] => &aelig;
            [??] => &ccedil;
            [??] => &egrave;
            [??] => &eacute;
            [??] => &ecirc;
            [??] => &euml;
            [??] => &igrave;
            [??] => &iacute;
            [??] => &icirc;
            [??] => &iuml;
            [??] => &eth;
            [??] => &ntilde;
            [??] => &ograve;
            [??] => &oacute;
            [??] => &ocirc;
            [??] => &otilde;
            [??] => &ouml;
            [??] => &divide;
            [??] => &oslash;
            [??] => &ugrave;
            [??] => &uacute;
            [??] => &ucirc;
            [??] => &uuml;
            [??] => &yacute;
            [??] => &thorn;
            [??] => &yuml;
            [??] => &OElig;
            [??] => &oelig;
            [??] => &Scaron;
            [??] => &scaron;
            [??] => &Yuml;
            [??] => &fnof;
            [??] => &circ;
            [??] => &tilde;
            [??] => &Alpha;
            [??] => &Beta;
            [??] => &Gamma;
            [??] => &Delta;
            [??] => &Epsilon;
            [??] => &Zeta;
            [??] => &Eta;
            [??] => &Theta;
            [??] => &Iota;
            [??] => &Kappa;
            [??] => &Lambda;
            [??] => &Mu;
            [??] => &Nu;
            [??] => &Xi;
            [??] => &Omicron;
            [??] => &Pi;
            [??] => &Rho;
            [??] => &Sigma;
            [??] => &Tau;
            [??] => &Upsilon;
            [??] => &Phi;
            [??] => &Chi;
            [??] => &Psi;
            [??] => &Omega;
            [??] => &alpha;
            [??] => &beta;
            [??] => &gamma;
            [??] => &delta;
            [??] => &epsilon;
            [??] => &zeta;
            [??] => &eta;
            [??] => &theta;
            [??] => &iota;
            [??] => &kappa;
            [??] => &lambda;
            [??] => &mu;
            [??] => &nu;
            [??] => &xi;
            [??] => &omicron;
            [??] => &pi;
            [??] => &rho;
            [??] => &sigmaf;
            [??] => &sigma;
            [??] => &tau;
            [??] => &upsilon;
            [??] => &phi;
            [??] => &chi;
            [??] => &psi;
            [??] => &omega;
            [??] => &thetasym;
            [??] => &upsih;
            [??] => &piv;
            [???] => &ensp;
            [???] => &emsp;
            [???] => &thinsp;
            [???] => &zwnj;
            [???] => &zwj;
            [???] => &lrm;
            [???] => &rlm;
            [???] => &ndash;
            [???] => &mdash;
            [???] => &lsquo;
            [???] => &rsquo;
            [???] => &sbquo;
            [???] => &ldquo;
            [???] => &rdquo;
            [???] => &bdquo;
            [???] => &dagger;
            [???] => &Dagger;
            [???] => &bull;
            [???] => &hellip;
            [???] => &permil;
            [???] => &prime;
            [???] => &Prime;
            [???] => &lsaquo;
            [???] => &rsaquo;
            [???] => &oline;
            [???] => &frasl;
            [???] => &euro;
            [???] => &image;
            [???] => &weierp;
            [???] => &real;
            [???] => &trade;
            [???] => &alefsym;
            [???] => &larr;
            [???] => &uarr;
            [???] => &rarr;
            [???] => &darr;
            [???] => &harr;
            [???] => &crarr;
            [???] => &lArr;
            [???] => &uArr;
            [???] => &rArr;
            [???] => &dArr;
            [???] => &hArr;
            [???] => &forall;
            [???] => &part;
            [???] => &exist;
            [???] => &empty;
            [???] => &nabla;
            [???] => &isin;
            [???] => &notin;
            [???] => &ni;
            [???] => &prod;
            [???] => &sum;
            [???] => &minus;
            [???] => &lowast;
            [???] => &radic;
            [???] => &prop;
            [???] => &infin;
            [???] => &ang;
            [???] => &and;
            [???] => &or;
            [???] => &cap;
            [???] => &cup;
            [???] => &int;
            [???] => &there4;
            [???] => &sim;
            [???] => &cong;
            [???] => &asymp;
            [???] => &ne;
            [???] => &equiv;
            [???] => &le;
            [???] => &ge;
            [???] => &sub;
            [???] => &sup;
            [???] => &nsub;
            [???] => &sube;
            [???] => &supe;
            [???] => &oplus;
            [???] => &otimes;
            [???] => &perp;
            [???] => &sdot;
            [???] => &lceil;
            [???] => &rceil;
            [???] => &lfloor;
            [???] => &rfloor;
            [???] => &lang;
            [???] => &rang;
            [???] => &loz;
            [???] => &spades;
            [???] => &clubs;
            [???] => &hearts;
            [???] => &diams;
        )
    */

    echo "<pre>";
    print_r(get_html_translation_table(HTML_SPECIALCHARS, ENT_QUOTES));
    echo "</pre>";
