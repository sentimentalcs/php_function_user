<?php 

function get_dir($dir)
{
	$handler = opendir($dir);
	while(($file = readdir($handler)) !== false){
		if($file!='.' && $file != '..'){
			if(is_dir($dir.'/'.$file)){
				echo $file.'---dir<br/>';
				get_dir($dir.'/'.$file);
			}else{
				echo $file.'--file<br/>';
			}
		}
	}
}

var_dump(get_dir('./test'));
	