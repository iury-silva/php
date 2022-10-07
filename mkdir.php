<?php 

$name = "Images";

if(!is_dir($name)){


  mkdir($name);
  echo "Diretorio criado com sucesso";

} else {

  rmdir($name);
  echo "Ja existe o diretorio $name e ele acabou de ser removido :)";


}





?>