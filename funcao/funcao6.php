<?php 

function soma(float...$valores){

  return array_sum($valores);


}

echo soma(2, 2);
echo "<br>";
echo soma(1.70, 1.50);
echo "<br>";
echo soma(2, 2);
echo "<br>";
echo soma(2, 2);
echo "<br>";

?>