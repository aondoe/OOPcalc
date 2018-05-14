<?php

class Calculator{

//Below are the methods used for the calculator class
    public function add($num_1,$num_2){
          return $num_1+$num_2;
    }

    public function mul($num_1,$num_2){
          return $num_1*$num_2;
    }
    public function sub($num_1,$num_2){
          return $num_1-$num_2;
    }

    public function div($num_1,$num_2){
          return $num_1/$num_2;
    }
}

$calc_obj=new Calculator;

$calculations=$_POST['calculations'];
$num_1=$_POST['num_1'];
$num_2=$_POST['num_2'];

//If add is selected, then add two numbers together
    if($calculations=='add'){
        echo $num_1." + ".$num_2." equals: ".$calc_obj->add($num_1,$num_2);
    }

//If mul is selected, then multiply two numbers together
    if($calculations=='mul'){
        echo $num_1." * ".$num_2." equals: ".$calc_obj->mul($num_1,$num_2);
    }

//If sub is selected, then subtract two numbers together
    if($calculations=='sub'){
        echo $num_1." - ".$num_2." equals: ".$calc_obj->sub($num_1,$num_2);
    }

//If sub is selected, then subtract two numbers together
    if($calculations=='div'){
        echo $num_1." / ".$num_2." equals: ".$calc_obj->div($num_1,$num_2);
    }

?>
