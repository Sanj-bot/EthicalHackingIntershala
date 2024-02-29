<?php
    $number1=intval($_GET['num1']);
    $number2=intval($_GET['num2']);
    $operator=$_GET['op'];


    if($operator=='+')
    {
        echo "The sum is: ".($number1+$number2);

    }
    else if($operator=='-')
    {
        echo "The subtraction is: ".($number1-$number2);
    }

    else
    {
        echo "Only +,- are supported!";
    }
?>