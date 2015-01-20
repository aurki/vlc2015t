<?php

function fibonacci($max) 
{
    $fibonacci=array();
    $f0=0;
    $f1=1;
    $f2=$f0+$f1;
    while($f2<=$max)
    {
        $fibonacci[]=$f2;
        $f0=$f1;
        $f1=$f2;
        $f2=$f0+$f1;
    }
    return $fibonacci;    
}



