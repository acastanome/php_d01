#!/usr/bin/php
<?php
    if ($argc > 1)
    {
        $string = trim(preg_replace('/\s+/', ' ', $argv[1]));
        $array = explode(' ',$string);
        if (count($array) > 1)
        {
            $word = array_shift($array);
            array_push($array, $word);
        }
        $string = implode(' ',$array);
        echo "$string\n";
    }
?>
