<?php 


 $arr = [
    ['name'=>'a','sex'=>'1'],
    ['name'=>'b','sex'=>'2'],
 ];

 $arr = ['name'=>'a','sex'=>'1'];
 
 //只有数组中的值可以改变，想要改变数组中的键没法改变 或者unset数组也无法改变
 array_walk($arr,function(&$a,$b){
 	$a .= 'ccc'
 });

 var_dump($arr);