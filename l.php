<?php 

$images = scandir("images");

$data = array();

foreach ($images as $img) {
  if(!in_array($img, array(".", ".."))){

    $filename = "images". DIRECTORY_SEPARATOR . $img;

    $info = pathinfo($filename);
    $info ["size"] = filesize($filename);
    $info ["modified"] = date("d/m/Y H:i:s", filemtime($filename));
    $info ["url"] = "http://localhost:4000/".$filename;

   array_push($info, $data);

  }
}

echo json_encode($data);



?>