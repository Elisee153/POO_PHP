<?php
//Les interfaces en php
interface X{
    public function abssis($x);    
}
interface Y{
    public function ordonnee($Y);
}
class Point implements X,Y{
    private $x;
    private $y;
    public function abssis($x){
        $this->x=$x;
        return $this->x;
    }
    public function ordonnee($y){
        $this->y=$y;
        return $this->y;
    }
    public function calcul($a,$b){
        $calc=($a*$a+$b*$b);
        return $calc;
    }
}
?>