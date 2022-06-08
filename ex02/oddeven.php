#!/usr/bin/php
<?PHP
function is_even($nb)
{
    if($nb % 2 == 0) echo "The number ".$nb." is even\n";
    else echo "The number ".$nb." is odd\n";
}
while(1)
{
    echo "Enter a number: ";
    $input = fgets(STDIN);
    if($input)
    {
        $input = trim($input);
        if(is_numeric($input))
            is_even($input);
        else
            echo "'".$input."' is not a number\n";
    }
    else
        exit("\n");
}   
?>
