<?php
header('Content-Type: text/html; charset=utf-8');

class class_1
{
    private function aPrivateMethod() 
        {
            echo "Je suis bien dans la methode privée.<br/>";
        }
    protected function aProtectedMethod() 
        {
            echo "Appel de la methode protégée à partir de class_1.<br/>";
            $this->aPrivateMethod();
        }
}

class class_2 extends class_1 
{
    public function aPublicMethod() 
    {
        echo "Appel methode publique à partir de class_2.<br/>";
        //$this->aPrivateMethod() ;
		$this->aProtectedMethod();
    }
}

$obj_2 = new class_2;
$obj_2->aPublicMethod();

?>
