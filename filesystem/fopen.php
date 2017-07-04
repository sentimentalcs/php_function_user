<?php 

	// fopen打开url 并用stream_get_contents字符串
	$f = fopen('https://wenku.baidu.com/view/013d179bec3a87c24028c44a.html','r');
	$res = stream_get_contents($f);
	print_r($res);