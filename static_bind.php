<?php

class Pere{
    static private function affiche($n){
        echo "<h1>Je suis le pere $n</h1><br/>";
    }
    static public function info($nom){
        static::affiche($nom);
    }    
}
//**************************************
class Fils extends Pere{
    static public function affiche($n){
        echo "Je suis le fils $n<br/>";
    }
}
class Fille extends Pere{   
    static function affiche($n){
        echo 'Je suis la fille '.$n;
    }    
}
Pere::info("Henry");
Fils::info("Jean");
Fille::info("Marie");
?>