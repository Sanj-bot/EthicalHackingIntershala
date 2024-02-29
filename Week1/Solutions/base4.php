<?php
    $hour=date('H');
    if($hour<12)
    {
        echo"Good Morning";
    }
    else if($hour>12)
    {
        echo"Good Afternoon";
    }

?>