<?php

abstract class AbstractClass 
{
    abstract public function test();

    public function autreTest(){
        echo "Mon autre test";
    }
}



class ImplementedClass extends AbstractClass 
{
    public function test() 
    {
        echo "Appel de la classe ImplementedClass.<br/>";
    }
}

//$o = new AbstractClass; // ne marche pas
$o = new ImplementedClass;
$o->test();
?>
