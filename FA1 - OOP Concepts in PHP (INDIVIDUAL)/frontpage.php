<?php session_start();
			
				class dumb {
					
					private $num = 1;
					private $word = "hello";
					
					public function displayInfo($input) {
						
						
						
						echo $input . " And that was input";
						//echo $num . "That is number and then" . $word . "That is text" . $input . "And that was input";
						
						
					}
					
					
					
				}

		$show = new dumb();
		
		$show -> displayInfo("hi");

			
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


