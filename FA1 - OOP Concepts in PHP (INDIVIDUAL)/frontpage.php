<?php session_start();
			
				class dumb {
					
					private $num = 1;
					private $word = "hello";
					
					public function displayInfo() {					
				
						echo nl2br("The number is = " . $this->getNum() . "\n",false);	
						echo "The word is = " . $this->getWord() . "\n";							
						
					}
					
					public function getNum(){
						return $this->num;
					}
					
					public function getWord(){
						return $this->word;
					}
					
					public function setNum($num){
						$this->num = $num;
					}
					
					public function setWord($word){
						$this->word = $word;
					}
					
				}

		$show = new dumb();
	
		$show -> displayInfo();

			
	?>	
	

<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		
		<title>FA1 - OOP Concepts in PHP (INDIVIDUAL)</title>

		<link rel="stylesheet" href="css/style.css">

	</head>
	
	<body>

		test

	</body>

</html>


