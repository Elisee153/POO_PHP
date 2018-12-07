<?php
//======================================================

class Action{
    private $nom;
    public function __construct($n){
        $this->nom=$n;
    }
    public function __destruct(){
        echo '<br/>L\' objet est detruit'; 
    }
    public function __clone(){
        $this->nom='Josaphat';
    }
}
$alcotel=new Action('Elisee');
$clone=clone $alcotel;
$bim=$alcotel;
$ref=& $alcotel;

?>