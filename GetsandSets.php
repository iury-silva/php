<?php 

class carro{

  private $modelo;
  private $motor;
  private $ano;

  public function getModelo(){

    return $this->modelo;

  }
  public function setModelo($modelo){

    $this->modelo = $modelo;
  }
public function getMotor():float{

  return $this->motor;
}
public function setMotor($motor){

    $this->motor = $motor;
}
public function getAno():int{

  return $this->ano;

}
public function setAno($ano){

  $this->ano = $ano;

}

public function exibir(){

  return array(

    "modelo" => $this->getModelo(),
    "motor" => $this->getMotor(),
    "ano" => $this->getAno()



  );
}
}

$corsa = new carro();
$corsa-> setModelo("Corsa Premium");
$corsa-> setMotor("1.4");
$corsa-> setAno("2009");

var_dump($corsa->exibir());



?>