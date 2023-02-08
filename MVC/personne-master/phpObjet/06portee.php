<?php
class MyClass 
{
    public $vert = "<b><font color=green>Je suis vert </font></b>";
    private $orange = "<b><font color=orange>Je suis orange</font></b>";
    protected $bleu = "<b><font color=blue>Je suis bleu</font></b>";
    protected $rouge = "<b><font color=red>Je suis rouge</font></b>";
    
    function printColor() 
    {
        print "Variable publique --> " . $this->vert."<br/>";
        print "Variable privee ----> " . $this->orange."<br/>";
        print "Variable protegee --> " . $this->bleu."<br/>";
        print "Variable protegee --> " . $this->rouge."<br/>";
        print "<hr>";
    }
}

class MyClass2 extends MyClass 
{
    protected $rouge ="ROUGE";
    public function printColor() 
    {
        print "Variable publique >>> " . $this->vert."<br/>"; 
        print "Variable privee >>> " . $this->orange."<br/>"; 
        print "Variable protegee >>> " . $this->bleu."<br/>"; 
        print "Protegee classe en cours >" . $this->rouge."<br/>"; 
        print "<hr>";
    }
}

echo "<b>Appel methode objet classe de base : </b><br/>";
$obj = new MyClass();
$obj->printColor(); //fonctionnement normal

echo "<b>Appel methode d'une classe qui etend classe ci-dessus:</b><br/>";
$obj_2 = new MyClass2();
$obj_2->printColor();

echo "<b>On essaie d'imprimer directement les variables</b><br/>";
print  "Variable publique >>> " . $obj_2->vert."<br/>";
print  "Variable privee >>> " . $obj_2->orange."<br/>";
?>