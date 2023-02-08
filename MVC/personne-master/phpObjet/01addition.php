<?php 
class addition_class
{
    function addition($a,$b)
    {
        $somme = $a + $b;
        return $somme ;
    }
}



$monAddition = new addition_class ;
$x = $monAddition->addition(5,10) ;
echo $x;

?>