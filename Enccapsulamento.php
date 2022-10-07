<?php 

class pessoa{

  public $nome = "Rasmus Lerdorf";
  protected $idade = 48;
  private $senha = "123456";

  public function verDados(){

    echo $this->nome."<br>";
    echo $this->idade."<br>";
    echo $this->senha."<br>";


}

}


class programador extends pessoa{

  public function verDados(){

    echo get_class($this). "<br>";

    echo $this->nome."<br>";
    echo $this->idade."<br>";
    echo $this->senha."<br>";
  }


}


$exibir = new programador();

//echo $exibir->idade."<br>";

$exibir -> verDados();

?>