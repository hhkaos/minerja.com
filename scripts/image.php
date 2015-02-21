<?php
	include 'ImageResize.php';

	//use \Eventviva\ImageResize;

	$image = new ImageResize('../latorre/photos/pic1.jpg');
	$image->resizeToWidth(500);
	$image->save('../latorre/photos/pic1_500.jpg');
?>