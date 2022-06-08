#!/usr/bin/php
<?php
function my_sort($s1, $s2)
{
    $i = 0;
    $order = "abcdefghijklmnopqrstuvwxyz0123456789!#$%&'()*+,-./:;<=>?@[\]^_`{|}~";

    while (($i < strlen($s1)) || ($i < strlen($s2)))
    {
        if (stripos($order, $s1[$i]) != stripos($order, $s2[$i]))
            return (stripos($order, $s1[$i]) - stripos($order, $s2[$i]));
        else
            $i++;
    }
}

function my_sort_cno($array)
{
    $elems = count($array);
    $i = 0;
    if ($elems > 1)
    {
        while ($i < ($elems - 1))
        {
            if (my_sort($array[$i], $array[$i + 1]) > 0)
            {
                 [$array[$i], $array[$i + 1]] = [$array[$i + 1], $array[$i]];
                 $i = 0;
            }
            else
                $i++;
        }
    }
    return ($array);
}

$string='';
if ($argc > 1)
{
    for($nb=1; $nb < $argc; $nb++)
        $string = $string.$argv[$nb]." ";
    $string = trim(preg_replace('/\s+/', ' ', $string));
    $array = explode(' ',$string);
    $array = my_sort_cno($array);
    foreach($array as $elem)
        echo "$elem\n";
}
?>
