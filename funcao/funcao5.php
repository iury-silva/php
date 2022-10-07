<?php 

$pessoa = array(
  "nome"=>"Iury",
  "idade"=>"20"
);

foreach ($pessoa as &$value) {

    if(gettype($pessoa)=== 'integer') $value+=10;

  echo $value."<br";

}

print_r($pessoa);

?>