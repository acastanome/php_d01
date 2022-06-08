#!/usr/bin/php
<?php
    if($argc == 2)
    {
        $string=trim($argv[1]);
        $array=explode(' ',$string);
        $array=array_filter($array);
        $string=implode(' ',$array);
        echo $string."\n";
    }
?>