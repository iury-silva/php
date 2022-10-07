<?php 

interface veiculo{

  public function acelerar($velocidade);
  public function frenar($velocidade);
  public function trocarMarcha($marcha);

}

abstract class Automovel implements veiculo{

  public function acelerar($velocidade)
  {
    echo "O veiculo acelerou até ".$velocidade."km/h";
  }

  public function frenar($velocidade)
  {
    echo "O veiculo frenou até ".$velocidade."km/h";
  }

  public function trocarMarcha($marcha)
  {
    echo "O veiculo engatou a marcha " . $marcha;
  }

}

class Corsa extends Automovel{

  public function ano(){



  }


}

$carro = new Corsa();

$carro ->acelerar(350);



?>