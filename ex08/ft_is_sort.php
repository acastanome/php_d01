#!/usr/bin/php
<?php
function ft_is_sort($array)
{
    $temp = $array;
    $tempr = $array;
    sort($temp);
    rsort($tempr);
    if (($array === $temp) || ($array === $tempr))
        return (true);
    else
        return (false);
}
?>
