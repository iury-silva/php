<?php 

session_id("ee75jlrch797aa41n3ktt68s9o");
require_once("config.php");

session_regenerate_id();
echo session_id();

var_dump($_SESSION);

?>