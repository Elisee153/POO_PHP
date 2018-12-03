<?php

    class Acces{
        public $varpub="Varpub";
        protected $varpro="Varpro";
        private $varpriv="Varpriv";

        protected function lirevar(){
            echo "$this->varpub<br/>";
            echo "$this->varpro<br/>";
            echo "$this->varpriv<br/>";
        }
    }

    $maclasse="Acces";
    $ac1=new $maclasse();
    $ac1->lirevar();
    //echo "<br/>$ac1->varpub";
    //echo "<br/>$ac1->varpro";
    //echo "<br/>$ac1->varpriv";
?>
<!--Accessibilite des methodes-->
<?php

    class Accesmeth{
        private $nom="Elisee";
        public function lirepub(){
            echo "$this->nom<br/>";
            $this->lirepro();
            $this->lirepriv();
        }
        protected function lirepro(){
            echo "$this->nom<br/>";
        }
        private function lirepriv(){
            echo "$this->nom<br/>";
        }
    }

    $ac2=new Accesmeth();
    $ac2->lirepub();
    //$ac2->lirepro(); impossible
    //$ac2->lirepriv(); impossible
?>
<!--proprietes et methodes static-->
<?php

    class Metstat{
        public static $nom="Mizkael";
        public static function getheur(){
            $heure=date("h : m : s");
            return $heure;
        }
        protected static function affiche(){
            $text=Metstat::$nom.' il est '.Metstat::getheur();
            return $text;
        } 
    }
    echo '<br/>'.Metstat::$nom.'<br/>';
    echo Metstat::getheur().'<br/>';
    echo Metstat::affiche();
    $vv=new Metstat();
    $vv->nom="Elisee";
    echo '<br/>'.$vv->nom.'<br/>';
    echo Metstat::affiche();
?>


