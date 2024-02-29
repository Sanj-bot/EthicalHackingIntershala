<?php
    $correct_username='admin';
    $correct_password="pass123";
    $input_username=$_POST['un'];
    $inpt_password=$_POST['pass'];

    // main logic

    if($input_username==$correct_username&&$inpt_password==$correct_password)
    {
        echo"Logged In";
    }
?>