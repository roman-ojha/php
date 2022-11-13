<?php

    /*
        *) Magic Constants:
            -> PHP provide us some Magic constants and they are:
                1. __LINE__
                    -> return line number
                2. __FILE__
                    -> return absolute path
                3. __DIR__
                    -> return absolute path of folder where current file is present
                4. __FUNCTION__
                    -> return name of the function if we pass inside it
                5. __CLASS__
                    -> return name of the class if we pass inside the class
                6. __METHOD__
                    -> return name of the method if we pass inside the class method
                7. __NAMESPACE__
                    -> return name of the namespace if we use inside it
                8. __TRAIT__
                    -> return name of the trait if we pass inside it
    */

    namespace MagicNamespace{
        // __LINE__ :
        echo "Line Number: ".__LINE__."</br>";
        // Output:
        // Line Number: 25

        // __FILE__ :
        echo "File path: ".__FILE__."</br>";
        // Output:
        // File path: C:\xampp\htdocs\php\Tutorial\OOP\29_Magic_Constants\index.php

        // __DIR__ :
        echo "Directory path: ".__DIR__."</br>";
        // Output:
        // Directory path: C:\xampp\htdocs\php\Tutorial\OOP\29_Magic_Constants

        // __FUNCTION__ :
        function magicFunction()
        {
            echo "Function Name: ".__FUNCTION__."</br>";
            // Output:
            // Function Name: magicFunction
            // Function Name: MagicNamespace\magicFunction
        }
        magicFunction();

        // __CLASS__ & __METHOD__ :
        class MagicClass
        {
            use MagicTrait;
            public function getClassName()
            {
                return __CLASS__;
            }

            public function getMethodName()
            {
                return __METHOD__;
            }
        }
        $magicClass = new MagicClass();
        echo "Class Name: ".$magicClass->getClassName()."</br>";
        echo "Method Name: ".$magicClass->getMethodName()."</br>";
        /*
            Output:
            Class Name: MagicNamespace\MagicClass
            Method Name: MagicNamespace\MagicClass::getMethodName
        */

        function getNamespaceName()
        {
            return __NAMESPACE__;
        }
        echo "Namespace name: ".getNamespaceName()."</br>";
        // Output:
        // Namespace name: MagicNamespace

        trait MagicTrait
        {
            public function getTraitName()
            {
                return __TRAIT__;
            }
        }
        echo "Trait Name: ".$magicClass->getTraitName()."</br>";
        // Trait Name: MagicNamespace\MagicTrait
    }
