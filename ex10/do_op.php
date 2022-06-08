#!/usr/bin/php
<?php
    $string='';
    if ($argc == 4)
    {
        for($nb=1; $nb < $argc; $nb++)
            $string = $string.$argv[$nb]." ";
        $string = trim(preg_replace('/\s+/', ' ', $string));
        $array = explode(' ',$string);
        $a = $array[0];
        $b = $array[1];
        $c = $array[2];
        if ($b == '+')
            echo $a + $c . "\n";
        else if ($b == '-')
            echo $a - $c . "\n";
        else if ($b == '*')
            echo $a * $c . "\n";
        else if ($b == '/')
            echo $a / $c . "\n";
        else if ($b == '%')
            echo $a % $c . "\n";
    }
    else
    {
        echo "Incorrect Parameters\n";
    }
?>
