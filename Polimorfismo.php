<?php 

abstract class Animal{

  public function Mover(){

    return "Anda";

  }

  public function Falar(){

    return "Som";
  }

}

class Cachorro extends Animal{

  public function Falar(){

    return "Late";

  }

}

class Gato extends Animal{

  public function Falar(){

    return "Mia";
  }

}

class Passaro extends Animal{

  public function Falar(){


    return "Canta";

  }

  public function Mover()
  {
    return "Voar e ". parent::Mover();
  }


}



$teddy = new Cachorro();

echo $teddy ->Falar(). "<br>";
echo $teddy ->Mover(). "<br>";

echo "<br> <hr> <br>";

$Micaela = new Gato();

echo $Micaela ->Falar(). "<br>";
echo $Micaela ->Mover(). "<br>";

echo "<br> <hr> <br>";

$papagaio = new Passaro();

echo $papagaio ->Falar(). "<br>";
echo $papagaio ->Mover(). "<br>";

?>