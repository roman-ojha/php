<?php

    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    echo $_SERVER['HTTP_HOST'];
    echo $_SERVER['PHP_SELF'];

    /*
        Output:
        Array
        (
            [MIBDIRS] => C:/xampp/php/extras/mibs
            [MYSQL_HOME] => \xampp\mysql\bin
            [OPENSSL_CONF] => C:/xampp/apache/bin/openssl.cnf
            [PHP_PEAR_SYSCONF_DIR] => \xampp\php
            [PHPRC] => \xampp\php
            [TMP] => \xampp\tmp
            [HTTP_HOST] => localhost
            [HTTP_CONNECTION] => keep-alive
            [HTTP_CACHE_CONTROL] => max-age=0
            [HTTP_SEC_CH_UA] => "Microsoft Edge";v="107", "Chromium";v="107", "Not=A?Brand";v="24"
            [HTTP_SEC_CH_UA_MOBILE] => ?0
            [HTTP_SEC_CH_UA_PLATFORM] => "Windows"
            [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
            [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.35
            [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*//*;q=0.8,application/signed-exchange;v=b3;q=0.9
            [HTTP_SEC_FETCH_SITE] => same-origin
            [HTTP_SEC_FETCH_MODE] => navigate
            [HTTP_SEC_FETCH_DEST] => document
            [HTTP_REFERER] => http://localhost/php/Tutorial/Main_Tutorial/38_$_Server/server_variable.php?fname=fdsa&age=4321&save=Submit
            [HTTP_ACCEPT_ENCODING] => gzip, deflate, br
            [HTTP_ACCEPT_LANGUAGE] => en-US,en;q=0.9
            [HTTP_COOKIE] => AuthToken=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjNjNzM1OTc3MWM5NDgyZTE2NmY4NjAyNjA3ZmIzNGU0IiwiaWF0IjoxNjU4MzI2MjUzfQ.TA17ifk1hU4yBZvtMnJ1czgpJrC2gTK7Oxx2z8gJdtc; csrftoken=guNTLrOubBNXGxnZo8EhFnqBWcCQddJqLHkt1Rsr5VziM7uS69ltGz6SqRDBuwbU
            [PATH] => C:\Program Files\Common Files\Oracle\Java\javapath;C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Windows\System32\OpenSSH\;C:\Program Files\nodejs\;C:\ProgramData\chocolatey\bin;C:\Program Files (x86)\Yarn\bin\;C:\Program Files\Git\cmd;C:\Program Files\MongoDB\Server\5.0\bin;C:\Program Files\Java\jdk-18.0.1.1\bin;C:\src\flutter\bin;C:\msys64\mingw64\bin;C:\Program Files (x86)\dotnet\;C:\Program Files\PostgreSQL\14\bin;C:\Program Files\Docker\Docker\resources\bin;C:\ProgramData\DockerDesktop\version-bin;C:\Program Files\Neovim\/bin;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files (x86)\Windows Kits\10\Windows Performance Toolkit\;C:\Users\razzr\.poetry\bin;C:\Users\razzr\AppData\Local\Programs\Python\Python310\Scripts\;C:\Users\razzr\AppData\Local\Programs\Python\Python310\;C:\Users\razzr\AppData\Local\Microsoft\WindowsApps;C:\Users\razzr\AppData\Local\Programs\Microsoft VS Code\bin;C:\Users\razzr\AppData\Roaming\npm;C:\Users\razzr\AppData\Local\Yarn\bin;C:\Users\razzr\AppData\Local\Programs\oh-my-posh\bin;C:\Users\razzr\AppData\Local\Android\Sdk\emulator;C:\Users\razzr\AppData\Local\Android\Sdk\tools;C:\Users\razzr\AppData\Local\Android\Sdk\platform-tools;C:\Users\razzr\AppData\Local\Android\Sdk\platforms;C:\Program Files\heroku\bin;
            [SystemRoot] => C:\WINDOWS
            [COMSPEC] => C:\WINDOWS\system32\cmd.exe
            [PATHEXT] => .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC
            [WINDIR] => C:\WINDOWS
            [SERVER_SIGNATURE] =>
        Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.1.10 Server at localhost Port 80


            [SERVER_SOFTWARE] => Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.1.10
            [SERVER_NAME] => localhost
            [SERVER_ADDR] => ::1
            [SERVER_PORT] => 80
            [REMOTE_ADDR] => ::1
            [DOCUMENT_ROOT] => C:/xampp/htdocs
            [REQUEST_SCHEME] => http
            [CONTEXT_PREFIX] =>
            [CONTEXT_DOCUMENT_ROOT] => C:/xampp/htdocs
            [SERVER_ADMIN] => postmaster@localhost
            [SCRIPT_FILENAME] => C:/xampp/htdocs/php/Tutorial/Main_Tutorial/38_$_Server/server_variable.php
            [REMOTE_PORT] => 55538
            [GATEWAY_INTERFACE] => CGI/1.1
            [SERVER_PROTOCOL] => HTTP/1.1
            [REQUEST_METHOD] => GET
            [QUERY_STRING] => fname=fdsa&age=4321&save=Submit
            [REQUEST_URI] => /php/Tutorial/Main_Tutorial/38_$_Server/server_variable.php?fname=fdsa&age=4321&save=Submit
            [SCRIPT_NAME] => /php/Tutorial/Main_Tutorial/38_$_Server/server_variable.php
            [PHP_SELF] => /php/Tutorial/Main_Tutorial/38_$_Server/server_variable.php
            [REQUEST_TIME_FLOAT] => 1668012604.876
            [REQUEST_TIME] => 1668012604
        )
    */
