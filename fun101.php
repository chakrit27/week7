<?php
    function myFunction()
    {
        echo "Hello World!";
    }

    myFunction() //Call the function
?>

<?php
    //php Function argument
    //$fname = "Mark";
    declare(strict_type=1);
    function myFamily(String $fname, int $age, String $year)
    { //formal parameter
        echo "My family is $fname : $age, Year : $year <br />";
    }

    myFamily("Mark",25,1975); // actual parameter(argument)
    myFamily("Jeff",26,2000);
?>