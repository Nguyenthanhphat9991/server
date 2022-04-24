<?php 
header('Access-Control-Allow-Origin: *');
move_uploaded_file($_FILES["image"]["tmp_name"], "img/" . $_FILES["image"]["name"]);
?>