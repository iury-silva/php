<form>

  <input type="text" name="name">
  <input type="date" name="nascimento">
  <input type="submit" value="Submit">


</form>

<?php 

if(isset ($_GET)){

  foreach ($_GET as $key => $value) {
    
    echo $key."<br>";
    echo $value."<br>";
    echo "<hr>";


  }




}





?>