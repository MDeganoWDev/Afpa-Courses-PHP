<?php
header('Content-Type: text/html; charset=utf-8');

class A
{
    static function example()
    {
        echo "Je suis dans la classe de base A.<br/>\n";
    }
}

/* class B extends A
{
    static function example()
    {
        echo "Je suis dans la classe B qui étend A .<br/>\n";
        parent::example();
    }
} */

//il n'y a pas d'objet de classe  A.
//ceci va imprimer "Je suis dans la classe de base A."
A::example();
// je crée un objet de classe B.
/* $b = new B;
//ceci va imprimer "Je suis dans la classe B qui étend A"
//puis "Je suis dans la classe de base A"
$b->example(); */
?>
