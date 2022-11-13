<?php

    /*
        *) Magic Methods
            -> it automatically get called based on condition
            -> for that we don't have to create object of that class
            -> magic method will get called when some conditional event occur
            -> they starts with prefix(__)function_name
            -> ex:
                 -> '__construct()' is also the magic method
            -> List:
                01. __construct()
                02. __destruct()
                03. __get()
                04. __set()
                05. __isset()
                06. __unset()
                07. __autoload() : deprecated so will use 'spl_autoload_register'
                08. __clone()
                09. __sleep()
                10. __wakeup()
                11. __call()
                12. __callStatic()
                13. __toString()
                14. __invoke()
    */
