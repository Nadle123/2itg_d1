<?php session_start();
			
	class Experiment {
			private $num = 1;
			private $word = "hello";
					
			public function displayInfo() {		
				echo nl2br("This is the display info function of the parent class: \n");					
				echo nl2br("This is the parent class, the number is = " . $this->getNum() . "\n",false);		
				echo nl2br("This is the parent class, the word is = " . $this->getWord() . "\n",false);	
				echo nl2br("This is the end of the display info function of the parent class \n");					
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


		class ExtraExperiment extends Experiment {
			private $newWord;
					
			function __construct($newWord) {
				$this->newWord = $newWord; 
			}
					
			public function getNewWord(){
				return $this->newWord;
			}
					
			function __call ($type,$arg){
				if($type=="printInfo"){
					$c=count($arg);
					switch ($c){
						case 1:
							echo nl2br("This is the child class, and an overload of the printInfo". "\n");	
							echo nl2br("The overloaded text is = " . $arg[0] . "\n",false);		
							echo nl2br("While the string is = " . $this->getNewWord() . "\n",false);	
						
						default:
							echo nl2br("This is the child class of the parent class, the string is = " . $this->getNewWord() . "\n",false);	
					
					}
				}
			}				
					

			
			public function displayInfo() {							
				echo nl2br("Child class of the parent class (while overriding the displayInfo), the string is = " . $this->getNewWord() . "\n",false);							
			}					
		}
		
		class ChildExtraExperiment extends ExtraExperiment {
			private $freshWord;
					
			function __construct($freshWord) {
				$this->freshWord = $freshWord; 
			}
					
			public function getFreshWord(){
				return $this->freshWord;
			}
					
			public function printInfo() {							
				echo nl2br("This is the child class of the child class, the string is = " . $this->getFreshWord() . "\n",false);		
							
			}			
			public function displayInfo() {							
				echo nl2br("This is the child class (with displayInfo), the number is = " . $this->getNum() . "\n",false);		
				echo nl2br("This is the child class (with displayInfo), the word is = " . $this->getWord() . "\n",false);				
			}
		}
		
		class SiblingExtraExperiment extends Experiment {
			private $latestWord;
					
			function __construct($latestWord) {
				$this->latestWord = $latestWord; 
			}
					
			public function getLatestWord(){
				return $this->latestWord;
			}
					
			public function printInfo() {							
				echo nl2br("This is another child class of the parent class, the string is = " . $this->getLatestWord() . "\n",false);		
							
			}			
		}


		$show = new Experiment();
		$show -> displayInfo();
		$show -> setWord("Changes");	
		$show -> setNum(32);	
		$show -> displayInfo();

		$try = new ExtraExperiment("hopefully this works");	
		$try -> printInfo("One of the moments of all time");
		$try -> printInfo();
		$try -> displayInfo();
		
		
		$epic = new ChildExtraExperiment("It's multilevelling time");	
		$epic -> printInfo();
		
		$newbie = new SiblingExtraExperiment("hierarchical time");
		$newbie -> printInfo();		
		
	?>	
	

<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		
		<title>FA1 - OOP Concepts in PHP (INDIVIDUAL)</title>

		<link rel="stylesheet" href="css/style.css">

	</head>
	
	<body>

		

	</body>

</html>


