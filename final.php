<?php
//===========================================================================
//si on fait preceder la class par le mot final, elle sera non heritable
class Personnage{
    protected $nom;
    protected $origine;
    protected function __construct($n,$o){
        $this->nom=$n;
        $this->origine=$o;
    }
    //impossible de redefinir cette methode
    final function affiche(){
        echo $this->nom;
    } 
}
//===================================================================================
class Enfant extends Personnage{
    private $taille;
    public function __construct($n,$o,$t){
        parent::__construct($n,$o);
        $this->taille=$t;
    }
    public function affiche_info(){
        $this::affiche();
        echo '<br/>'.$this->taille;
    }
}
$enf=new Enfant('Junior','Zambi',165);
$enf->affiche_info();
?>