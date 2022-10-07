<?php 

$pessoas = array();

array_push($pessoas, array('nome'=>'Iury', 'idade'=>20));

array_push($pessoas, array('nome'=>'Joao', 'idade'=>35));

echo json_encode($pessoas);


?>