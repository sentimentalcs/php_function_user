<?php 
	$url = 'G:/wamp/www/opt/dir/upload.image.jpg';
	$pathinfo = pathinfo($url);
	var_dump($pathinfo);
	var_dump($pathinfo['extension']);