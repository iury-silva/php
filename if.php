<?php 

$qualASuaIdade = 66;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65;

if($qualASuaIdade<$idadeCrianca){

    echo "criança";
}  
    else if($qualASuaIdade<$idadeMaior){

      echo "adolescente";
    }
          else if($qualASuaIdade<$idadeIdoso){

            echo "adulto";
          }
            else
                echo "idoso";

?>
