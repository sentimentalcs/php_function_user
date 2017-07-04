<?php 

	class People
	{
		private $age;
		public  $name;
		protected $sex;
		public function __construct(PDO $age,$sex='a',$param)
		{
			$this -> init();

		}

		private  function init()
		{
			$this -> age =10;
			$this -> name = 'hello';
			$this -> sex = 1;
		}
	}

	$ref = new ReflectionClass('People');
	var_dump($ref->getConstructor()->getParameters());
