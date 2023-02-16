<?php session_start();
			
				if(isset($_POST['compute'])){
					$msg = "<span style='color:red'>Hello World!</span>";

					// Popup display if no input
					if(@$_REQUEST['type'] == NULL && @$_REQUEST['salary'] == NULL)
					{ 
						echo '<script> alert("Please input your salary and choose a type.") </script>'; 
						$complete = false; 
					}
					
					else if (@$_REQUEST['type'] == NULL)
					{ 
						echo '<script> alert("Please choose a type.") </script>'; 
						$complete = false; 
					}
					
					else if (@$_REQUEST['salary'] == NULL)
					{ 
						echo '<script> alert("Please input your salary.") </script>'; 
						$complete = false; 
					}					
		
					else
					{
						$complete = true; 
						$money = $_POST['salary'];
						$type = $_POST['type'];
						$Annual_Salary = 0;
						$Monthly_Salary = 0;
						$Est_Annual_Tax = 0;
						$Est_Monthly_Tax = 0;
					
						switch($type){
							case 'Monthly':
							if ($money < 250000){
								$Annual_Salary  = $_POST['salary'];	
							}	
							else if ($money >= 250000 && $money < 400000){
								//This computes for annual salary (Salary is above 250000, so subtract it with 250000)
								$Annual_Salary = $money - 250000;
								//This computes for Est Annual Tax (Use annual salary and get it's 20%)
								$Est_Annual_Tax = $Annual_Salary * .2;
								//This computes for Est Annual Tax (Get annual tax then divide it all by 12, because months in a year)
								$Est_Monthly_Tax = $Est_Annual_Tax / 12;
								//This computes for monthly salary (Divide salary by 12 because months)
								$Monthly_Salary = $money / 12;
						
							}	
							else if ($money >= 400000 && $money < 800000){
								//This computes for annual salary (Salary is above 400000, so subtract it with 400000)
								$Annual_Salary = $money - 400000;							
								//This computes for Est Annual Tax (Use annual salary and get it's 25% and add 30000)
								$Est_Annual_Tax = ($Annual_Salary * .25) + 30000;
								//This computes for Est Annual Tax (Get annual tax then divide it all by 12, because months in a year)
								$Est_Monthly_Tax = $Est_Annual_Tax / 12;
								//This computes for monthly salary (Divide salary by 12 because months)
								$Monthly_Salary = $money / 12;
							}
							else if ($money >= 800000 && $money < 2000000){		
								//This computes for annual salary (Salary is above 800000, so subtract it with 800000)
								$Annual_Salary = $money - 800000;							
								//This computes for Est Annual Tax (Use annual salary and get it's 25% and add 30000)
								$Est_Annual_Tax = ($Annual_Salary * .3) + 130000;
								//This computes for Est Annual Tax (Get annual tax then divide it all by 12, because months in a year)
								$Est_Monthly_Tax = $Est_Annual_Tax / 12;
								//This computes for monthly salary (Divide salary by 12 because months)
								$Monthly_Salary = $money / 12;
							}
							else if ($money >= 2000000 && $money < 8000000){		
								//This computes for annual salary (Salary is above 2000000, so subtract it with 2000000)
								$Annual_Salary = $money - 2000000;							
								//This computes for Est Annual Tax (Use annual salary and get it's 25% and add 30000)
								$Est_Annual_Tax = ($Annual_Salary * .32) + 490000;
								//This computes for Est Annual Tax (Get annual tax then divide it all by 12, because months in a year)
								$Est_Monthly_Tax = $Est_Annual_Tax / 12;
								//This computes for monthly salary (Divide salary by 12 because months)
								$Monthly_Salary = $money / 12;
							}		
							else{
								//This computes for annual salary (Salary is above 8000000, so subtract it with 8000000)
								$Annual_Salary = $money - 8000000;							
								//This computes for Est Annual Tax (Use annual salary and get it's 25% and add 30000)
								$Est_Annual_Tax = ($Annual_Salary * .35) + 2410000;
								//This computes for Est Annual Tax (Get annual tax then divide it all by 12, because months in a year)
								$Est_Monthly_Tax = $Est_Annual_Tax / 12;
								//This computes for monthly salary (Divide salary by 12 because months)
								$Monthly_Salary = $money / 12;
							}
							
							break;
							default:
							echo '<script> alert("Bi monthly is not yet worked on.") </script>';
							}
						}
					}
				
	?>	
	




<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		<title> test</title>

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
					<!--<input type="radio" name="type" value="Bi-Monthly" style="height:20px; width:20px;">
					-->	&emsp;
						&emsp;
							
					Monthly:
					<input class="radio" type="radio" name="type" value="Monthly" style="height:20px; width:20px;">
					<!--<input type="radio" name="type" value="Monthly" style="height:20px; width:20px;">	
					-->	<br>
						<br>
	
									
						<input name="compute" type="submit" value="Compute" class="Button3" style="height: 50px; width: 175;  font-size: 18pt; font-family: 'Poppins', sans-serif;">						
					
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
						
						<?php if (isset($msg)) { ?>
					<td colspan="2" align="center" valign="top"><?php echo $msg; ?></td>   
					
				
						<!-- Example Display -->
						<td colspan="2" align="center" valign="top"><?php 
						if ($complete==true)
						echo $money; ?></td>
						<td colspan="2" align="center" valign="top"><?php 
						
						if ($complete==true)
						echo $type; ?></td>   					
				<?php } ?>
			

				</center>	
											
			</AppN>
		

		</header>

</form>
		

	</body>

</html>


