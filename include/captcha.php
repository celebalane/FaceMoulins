<?php
session_start();
     	header ("Content-type: image/png");
     	$image = imagecreate(210, 50);
     	$blancCassé = imagecolorallocate($image, 254, 254, 226);
		$noir = imagecolorallocate($image, 0, 0, 0);
		imagestring($image, 5, 70, 15, $_SESSION["code"], $noir);
     	imagepng($image);
?>