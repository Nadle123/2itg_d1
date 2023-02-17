<?php session_start();
			$complete = false; 
				if(isset($_POST['compute'])){

					// Popup display if no input
					if(@$_REQUEST['type'] == NULL && @$_REQUEST['salary'] == NULL)
					{ 
						echo '<script> alert("Please input your salary and choose a type.") </script>'; 
						$complete = false; 
					}
					//Popup display if no salary
					else if (@$_REQUEST['salary'] == NULL)
					{ 
						echo '<script> alert("Please input your salary.") </script>'; 
						$complete = false; 
					}			
					//Popup display if no type
					else if (@$_REQUEST['type'] == NULL)
					{ 
						echo '<script> alert("Please choose a type.") </script>'; 
						$complete = false; 
					}

					else
					{
						//This initializes the variables
						$complete = true; 
						$money = $_POST['salary'];
						$type = $_POST['type'];
						$Annual_Salary = 0;
						$Monthly_Salary = 0;
						$Est_Annual_Tax = 0;
						$Est_Monthly_Tax = 0;
					
						switch($type){
							case 'Monthly':
							
							//This computes for annual salary (multiply by 12 for all months in a year)
							$Annual_Salary = $money * 12;
							
							if ($Annual_Salary < 250000){
								//This computes for Est Annual Tax 
								$Est_Annual_Tax = 0;
								//This computes for Est Monthly Tax 
								$Est_Monthly_Tax = 0;

							}	
							else if ($Annual_Salary >= 250000 && $Annual_Salary < 400000){

								//This computes for Est Annual Tax (Use annual salary and subtract 250000, then get it's 20%)
								$Est_Annual_Tax = ($Annual_Salary - 250000) * .2 ;
								//This computes for Est Annual Tax (Get annual tax then divide it all by 12, because months in a year)
								$Est_Monthly_Tax = $Est_Annual_Tax / 12;
							}	
							
							else if ($Annual_Salary >= 400000 && $Annual_Salary < 800000){					
								//This computes for Est Annual Tax (Use annual salary and get it's 25% and add 30000)
								$Est_Annual_Tax = (($Annual_Salary - 400000)* .25) + 30000;
								//This computes for Est Annual Tax (Get annual tax then divide it all by 12, because months in a year)
								$Est_Monthly_Tax = $Est_Annual_Tax / 12;
							}
							
							else if ($Annual_Salary >= 800000 && $Annual_Salary < 2000000){								
								//This computes for Est Annual Tax (Use annual salary and get it's 25% and add 30000)
								$Est_Annual_Tax = (($Annual_Salary - 800000) * .3) + 130000;
								//This computes for Est Annual Tax (Get annual tax then divide it all by 12, because months in a year)
								$Est_Monthly_Tax = $Est_Annual_Tax / 12;						
							}
							
							else if ($Annual_Salary >= 2000000 && $Annual_Salary < 8000000){									
								//This computes for Est Annual Tax (Use annual salary and get it's 25% and add 30000)
								$Est_Annual_Tax = (($Annual_Salary - 2000000) * .32) + 490000;
								//This computes for Est Annual Tax (Get annual tax then divide it all by 12, because months in a year)
								$Est_Monthly_Tax = $Est_Annual_Tax / 12;
							}		
							
							else{							
								//This computes for Est Annual Tax (Use annual salary and get it's 25% and add 30000)
								$Est_Annual_Tax = (($Annual_Salary - 8000000) * .35) + 2410000;
								//This computes for Est Annual Tax (Get annual tax then divide it all by 12, because months in a year)
								$Est_Monthly_Tax = $Est_Annual_Tax / 12;
							}
	
							break;
							//This computes for annual salary (multiply by 24 for all months in a year twice)
							case 'Bi - Monthly':
							
							//This computes for annual salary (multiply by 12 for all months in a year)
							$Annual_Salary = $money * 24;
							
							if ($Annual_Salary < 250000){
								//This computes for Est Annual Tax 
								$Est_Annual_Tax = 0;
								//This computes for Est Monthly Tax 
								$Est_Monthly_Tax = 0;

							}	
							else if ($Annual_Salary >= 250000 && $Annual_Salary < 400000){

								//This computes for Est Annual Tax (Use annual salary and subtract 250000, then get it's 20%)
								$Est_Annual_Tax = ($Annual_Salary - 250000) * .2 ;
								//This computes for Est Annual Tax (Get annual tax then divide it all by 12, because months in a year)
								$Est_Monthly_Tax = $Est_Annual_Tax / 12;
							}	
							
							else if ($Annual_Salary >= 400000 && $Annual_Salary < 800000){					
								//This computes for Est Annual Tax (Use annual salary and get it's 25% and add 30000)
								$Est_Annual_Tax = (($Annual_Salary - 400000)* .25) + 30000;
								//This computes for Est Annual Tax (Get annual tax then divide it all by 12, because months in a year)
								$Est_Monthly_Tax = $Est_Annual_Tax / 12;
							}
							
							else if ($Annual_Salary >= 800000 && $Annual_Salary < 2000000){								
								//This computes for Est Annual Tax (Use annual salary and get it's 25% and add 30000)
								$Est_Annual_Tax = (($Annual_Salary - 800000) * .3) + 130000;
								//This computes for Est Annual Tax (Get annual tax then divide it all by 12, because months in a year)
								$Est_Monthly_Tax = $Est_Annual_Tax / 12;						
							}
							
							else if ($Annual_Salary >= 2000000 && $Annual_Salary < 8000000){									
								//This computes for Est Annual Tax (Use annual salary and get it's 25% and add 30000)
								$Est_Annual_Tax = (($Annual_Salary - 2000000) * .32) + 490000;
								//This computes for Est Annual Tax (Get annual tax then divide it all by 12, because months in a year)
								$Est_Monthly_Tax = $Est_Annual_Tax / 12;
							}		
							
							else{							
								//This computes for Est Annual Tax (Use annual salary and get it's 25% and add 30000)
								$Est_Annual_Tax = (($Annual_Salary - 8000000) * .35) + 2410000;
								//This computes for Est Annual Tax (Get annual tax then divide it all by 12, because months in a year)
								$Est_Monthly_Tax = $Est_Annual_Tax / 12;
							}					
						}
					}
				}
				
	?>	
	

<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		<title>TAXXY: A TAX CALCULATOR WEB APP</title>

		<link rel="stylesheet" href="css/style.css">

	</head>
	
		<body>

		<header class="bg"> 

			<center>					
			
	
				<img src="img/logo.png" alt="Photo of the logo" width=auto height="200">	<br><br><br>
				
				<AppN>
				<form method="post">
		
					
					<td align="right" valign="top">Salary: (PHP)</td>
					<td><input type="text" name="salary"  class="Input" placeholder="Ex: 13,000" size="15" style="height: 48px;  font-size: 18pt; font-family: 'Poppins', sans-serif;"></td>							
						<br>
						<br>						
					<u><td align="right" valign="top">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Type:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td></u>
						<br>
							
					Bi - Monthly:
					<input class="radio" type="radio" name="type" value="Bi - Monthly" style="height:20px; width:20px;">
						&emsp;
						&emsp;
							
					Monthly:
					<input class="radio" type="radio" name="type" value="Monthly" style="height:20px; width:20px;">
						<br>
						<br>
				
						<input name="compute" type="submit" style="height: 50px; width: 175; font-size: 18pt; font-family: 'Poppins', sans-serif;" value="Compute">		
									
						  
				</form>		
						<br>
				
							
					Annual Salary:				
						<?php 
							if ($complete==true) { 													
								echo "PHP ".$Annual_Salary;					
							}										
						?>
					
						<br><br>
							
					Est. Annual Tax:
						<?php 
							if ($complete==true) { 													
								echo "PHP ".$Est_Annual_Tax;					
							}										
						?>
					
						<br><br>
						
					Est. Monthly Tax:
						<?php 
							if ($complete==true) { 													
								echo "PHP ".round($Est_Monthly_Tax,2);					
							}									
						?>
						
						<br><br>						
						
				</center>	
											
			</AppN>
		

		</header>

</form>
		

	</body>

</html>


