#!/usr/bin/php
<?php
    if ($argc == 2)
    {
        $string = $argv[1];
        $string = trim(preg_replace('/\s+/', ' ', $string));
        $array = explode(' ',$string);
        $a = $array[0];
        $b = $array[1];
        $c = $array[2];
        if (is_numeric($a) && is_numeric($c))
        {
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
            echo "Syntax Error\n";
    }
    else
    {
        echo "Incorrect Parameters\n";
    }
?>
