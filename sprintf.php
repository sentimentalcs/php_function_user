<?php 
	
	// sprintf 用发解析
	$format = 'The %3$s -- %2$s contains %1$d monkeys %3$s %3$s %3$s';
	$num = 10;
	$location = '__test__';
	$test = '__HELLO__';
	echo sprintf($format, $num, $location,$test);
 ?>