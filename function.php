<?php
function vypocetObvod($a, $b, $c)
{
    return 4*($a+$b+$c);
}

function vypocetObsah($a, $b, $c)
{
    return ($a*$b + $b*$c + $a*$c)*2;
}

function vypocetObjem($a, $b, $c)
{
    return $a*$b*$c;
}
