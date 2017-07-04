<?php 


 $arr = [
    ['name'=>'a','sex'=>'1'],
    ['name'=>'b','sex'=>'2'],
 ];

 $arr = ['name'=>'a','sex'=>'1'];
 
 array_walk($arr,function(&$a,$b){
 	$a .= 'ccc'
 });

 var_dump($arr);