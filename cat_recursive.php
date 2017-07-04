<?php  
	$arr = [
		['id'=>1,'pid'=>0,'name'=>'数码'],
		['id'=>2,'pid'=>0,'name'=>'生活'],
		['id'=>3,'pid'=>7,'name'=>'海尔空调'],
		['id'=>4,'pid'=>2,'name'=>'牙膏'],
		['id'=>5,'pid'=>4,'name'=>'黑人牙膏'],
		['id'=>6,'pid'=>8,'name'=>'荣耀8'],
		['id'=>7,'pid'=>2,'name'=>'空调'],
		['id'=>8,'pid'=>9,'name'=>'华为手机'],
		['id'=>9,'pid'=>1,'name'=>'手机'],
	];



	function cat_recursive($arr,$id)
	{
		global $tmp;
		var_dump($tmp);
		foreach($arr as $k => $v){
			if($v['pid'] == $id){
				$tmp[] = $v;
				cat_recursive($arr,$v['id']);
			}	
		}
		return $tmp;
	}

	$res = cat_recursive($arr,1);
	var_dump($res);