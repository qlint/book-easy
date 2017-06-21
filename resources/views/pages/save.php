<?php 
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$id = $_POST['id'];
   $seats  = $_POST['seats'];
   $count = $_POST['count'];
   $file = fopen("/opt/lampp/htdocs/passVal/".$fn.".record","w");
   echo fwrite($file,$str);
   fclose($file);
?>