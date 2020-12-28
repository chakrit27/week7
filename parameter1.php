<?php
    //Addition and Subtraction
    //1.Adding two numbers
    function add($x,$y){
        $sum = $x + $y;
        echo "Sum of two number is : $sum<br />";
    }
    add(5, 10);

    //2.Subtraction two numbers
    function sub($x, $y){
        $sum = $x - $y;
        echo "Subtraction of two number is : $sum<br />";
    }
    sub(30, 20); //10

    //3.Adding two numbers
    function add2($x, $y){
        $sum = $x + $y;
        echo "Sum of two number is : $sum<br />";
    }  
    if(isset($_POST['add'])){
        add2($_POST['first'],$_POST['second']);

    }

    //4.Subtraction two numbers
    function sub2($x, $y){
        $sum = $x - $y;
        echo "Sum of two number is : $sum<br />";
    }
    if(isset($_POST['sub'])){
        sub2($_POST['first'],$_POST['second']);
    }
?>

<from method="post">
    Enter First number :<input type="number" name="first" /><br />
    Enter Second number :<input type="number" name="second" /><br />
    <input type="submit" value="Addition" />
</from>