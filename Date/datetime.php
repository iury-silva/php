<?php 

echo date("F j, Y, g:i a");
echo '<br>';
echo time();
echo '<br>';

$ts = strtotime("2018-04-17");

echo date("l d/m/Y", $ts);

?>