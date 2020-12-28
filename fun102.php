<?php
    // Php Default Argument Value
    function sayHello($name = "Mark")
    {
        echo "Hello $name<br />";
    }

    sayHello("Jame");
    sayHello();
    sayHello("John");
?>