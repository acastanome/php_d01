#!/usr/bin/php
<?php
$string='';
if ($argc > 1)
{
    for($nb=1; $nb < $argc; $nb++)
        $string = $string.$argv[$nb]." ";
    $string = trim(preg_replace('/\s+/', ' ', $string));
    $array = explode(' ',$string);
    sort($array);
    foreach($array as $elem)
        echo "$elem\n";
}
?>
