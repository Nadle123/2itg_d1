<?php session_start();
			
				if(isset($_POST['compute'])){
					$msg = "<span style='color:red'>Hello World!</span>";

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
			
				<?php if (isset($msg)) { ?>
					<td colspan="2" align="center" valign="top"><?php echo $msg; ?></td>   
					
				

						<td colspan="2" align="center" valign="top"><?php 
						if ($complete==true)
						echo $money; ?></td>
						<td colspan="2" align="center" valign="top"><?php 
						
						if ($complete==true)
						echo $type; ?></td>   					
				<?php } ?>
			
				<img src="img/logo.png" alt="Photo of the logo" width=auto height="200">	<br><br><br>
				
				<AppN>
				<form method="post">
				<!--<form action="" method="post" name="Login_Form"> -->
					
					<td align="right" valign="top">Salary: (PHP)</td>
					<td><input type="text" name="salary"  class="Input" placeholder="Ex: 13,000" size="15" style="height: 48px;  font-size: 18pt; font-family: 'Poppins', sans-serif;"></td>							
						<br>
						<br>						
					<u><td align="right" valign="top">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Type:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td></u>
						<br>
							
					Bi- Monthly:
					<input type="radio" name="type" value="Bi-Monthly" style="height:20px; width:20px;">
						&emsp;
						&emsp;
							
					Monthly:
					<input type="radio" name="type" value="Monthly" style="height:20px; width:20px;">	
						<br>
						<br>
	
					<!-- 	<input type="submit" name="compute" value="Compute" style="height: 48px;  font-size: 18pt; font-family: 'Poppins', sans-serif;"> 	-->					
						<input name="compute" type="submit" value="Compute" class="Button3">						
					<!-- 	<button class="button" name="compute" style="height: 48px;  font-size: 18pt; font-family: 'Poppins', sans-serif;">Compute</button> -->
				</form>		
						<br>
						<br>
							
					Annual Salary:
						<br>
						<br>
							
					Est. Annual Tax:
						<br>
						<br>
						
					Est. Monthly Tax:
						<br>
						<br>

				</center>	
											
			</AppN>
		

		</header>

</form>
		

	</body>

</html>


