<?php 

class Pessoa{

public $nome;

public function falar(){

    return "O meu nome é ".$this->nome;

}


}

$iury = new Pessoa();
$iury->nome = "Iury da Silva";
echo $iury->falar();



?>