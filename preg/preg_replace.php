<?php
	$string = 'April 15, 2003';


	// pattern和replacement是单一的解构
	$pattern = '/(\w+) (\d+), (\d+)/i';
	$replacement = '${1}1,$3';

	//pattern和replacement是数组格式
	$pattern = ['/fifteen/','/April/','/15/','/2003/'];
	$replacement = ['asd','test','fifteen','twothoundandthree'];
	echo preg_replace($pattern, $replacement, $string);
