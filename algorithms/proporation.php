<?php 

	
	$arr = [1,10,7,99,102,87];

	//冒泡排序法
	function bubble($arr)
	{
		//控制需要冒泡的轮数
		$length = count($arr);
		for($i = 1 ; $i < $length ; $i++){

			//控制每一轮需要比较的次数
			for($k = 0; $k < $length - $i ; $k++){
				if($arr[$k] > $arr[$k+1]){
					$tmp = $arr[$k+1];
					$arr[$k+1] = $arr[$k];
					$arr[$k] = $tmp;
				}
			}
		}
		return $arr;
	}

	//选择排序法
	function select_sort($arr)
	{
		$length = count($arr);

		//控制最小值的位置  假设的次数 
		for($i = 0 ; $i < $length - 1; $i++){

			//先记录最小值的位置
			$p = $i;

			//然后与该最小值后面的每个数进行比较 得出最小值的位置$p
			for($k = $i + 1; $k < $length;$k++){
				if($arr[$p] > $arr[$k]){
					$p = $k;
				}
			}

		    //如果最小值不是假设时的$i;则交换他们的位置
			if($p != $i){
				$tmp = $arr[$i];
				$arr[$i] = $arr[$p]; 
				$arr[$p] = $tmp;
			}
		}
		return $arr;
	}


	//插入排序法
	function insert_sort($arr)
	{
		$length = count($arr);
		for($i = 1; $i < $length; $i++){
			$tmp = $arr[$i];
			for($j = $i -1 ; $j >= 0; $j--){
				if($tmp < $arr[$j]){
					$arr[$j+1] = $arr[$j];
					$arr[$j] = $tmp;
				}else{
					break;
				}
			}
		}

		return $arr;
	}
	
	/**快速排序
	 * [quick_sort description]
	 * @param  [type] $arr [description]
	 * @return [type]      [description]
	 */
	function quick_sort($arr)
	{
		if(count($arr) <= 1){
			return $arr;
		}

		$base_num = $arr[0];
		$left_arr = [];
		$right_arr=[];
		for($i = 1 ; $i < count($arr); $i++){
			if($arr[$i] > $base_num){
				$right_arr[] = $arr[$i];
			}else{
				$left_arr[] = $arr[$i];
			}
		}

		$left_arr = quick_sort($left_arr);
		$right_arr = quick_sort($right_arr);
		return array_merge($left_arr,[$base_num],$right_arr);
	}


	function yuesefu($n,$m) { 
	  $r=0; 
	  for($i=2; $i<=$n; $i++) {
	 
	      $r=($r+$m)%$i; 
	  }
	  return $r+1; 
	} 
	print_r(yuesefu(6,3));
	// var_dump(quick_sort($arr));