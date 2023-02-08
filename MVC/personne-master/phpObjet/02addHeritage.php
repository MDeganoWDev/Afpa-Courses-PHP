<?php 
class addition_class
{
	public $somme;

    function addition($a,$b)
    {
        $this->somme = $a + $b;
        return $this->somme ;
    }
    
}

class moyenne_class extends addition_class
{
	private $param1;
	private $param2;
	
	function __construct($a=0,$b=0){
		$this->param1 = $a;
		$this->param2 = $b;
	}
	
    function moyenne()
    {
        $this->addition($this->param1,$this->param2); 
        $maMoyenne = $this->somme/2 ;
        return $maMoyenne;
    }
}    



$chiffre_1 = 12 ;
$chiffre_2 = 15 ;
$laMoyenne = new moyenne_class($chiffre_1,$chiffre_2);
$moyenne = $laMoyenne->moyenne();
echo "La somme des deux nombres $chiffre_1 et $chiffre_2 est " . $laMoyenne->somme . "<br/>";
echo "La moyenne des deux nombres {$chiffre_1} et {$chiffre_2} est  $moyenne ";

?>