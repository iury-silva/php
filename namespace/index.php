<?php 

require_once("config.php");

$cad = new cadastro();
$cad->setNome("Iury da Silva");
$cad->setEmail("iury2002silva@hotmail.com");
$cad->setSenha("12345678");

echo $cad;


?>