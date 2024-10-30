<!doctype  html >

   <html lang="en"> 
   <head>
   <title> Website </title>
   <link rel="icon" type="image/x-icon" href="images/zmaristlogo.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- ************************************************************************
	***     Default styles for all website  files                        ***
	************************************************************************ -->     
	 <link rel="stylesheet" href="css/style.css">

    <!-- ************************************************************************
    ***     Menu Links					                                  ***
	************************************************************************ -->         	 
    </head>  
        
	<div class='menu'>
	<?php include '000. navigation.php'; ?>	
	</div>  

    <body>

    <?php

		$role=$_GET['role'];

		if ($role == 'student') {
			echo '
			<div class="block1" style="margin-top: 60px;"> <h1> Student Grades </h1>	</div>	  		 
			<h1 style="color: green"> Awesome! Keep up the good work! </h1>
			<table style="border: 1px solid;">
				<tr style="background-color: green;">
					<td><strong> Course  </strong></td>
					<td><strong> Grade </strong></td>
				</tr>
				<tr>
					<td> Introduction to Cybersecurity </td>
					<td> A </td>
				</tr>
				<tr>
					<td> Introduction to Data Analytics </td>
					<td> A- </td>
				</tr>
				<tr>
					<td> First Year Seminar </td>
					<td> B+ </td>
				</tr>
				<tr>
					<td> Writing for College </td>
					<td> A </td>
				</tr>
			</table>
			';
		}
		elseif ($role == 'teacher') {
			echo '
			<div class="block1" style="margin-top: 60px;"> <h1> Grades for All Students </h1>	</div>	  		 
			<h4 style="color: green"> You can edit student grades here </h4>
			<table style="border: 1px solid;">
				<tr style="background-color: green;">
					<td><strong> Intro to Cybersecurity  </strong></td>
					<td><strong> Grade </strong></td>
				</tr>
				<tr>
					<td> Peter Parker </td>
					<td> A </td>
				</tr>
				<tr>
					<td> Linda Smith </td>
					<td> A- </td>
				</tr>
				<tr>
					<td> John Foden </td>
					<td> B+ </td>
				</tr>
				<tr>
					<td> Sarah  Nor</td>
					<td> A </td>
				</tr>
			</table>
			<table style="border: 1px solid;">
				<tr style="background-color: green;">
					<td><strong> Software Development 1   </strong></td>
					<td><strong> Grade </strong></td>
				</tr>
				<tr>
					<td> Peter Parker </td>
					<td> A </td>
				</tr>
				<tr>
					<td> Linda Smith </td>
					<td> A- </td>
				</tr>
				<tr>
					<td> John Foden </td>
					<td> B+ </td>
				</tr>
				<tr>
					<td> Sarah  Nor</td>
					<td> A </td>
				</tr>
			</table>
			<table style="border: 1px solid;">
				<tr style="background-color: green;">
					<td><strong> Software Development 2  </strong></td>
					<td><strong> Grade </strong></td>
				</tr>
				<tr>
					<td> Peter Parker </td>
					<td> A </td>
				</tr>
				<tr>
					<td> Linda Smith </td>
					<td> A- </td>
				</tr>
				<tr>
					<td> John Foden </td>
					<td> B+ </td>
				</tr>
				<tr>
					<td> Sarah  Nor</td>
					<td> A </td>
				</tr>
			</table>
			';
		}
		else {
			echo "Invalid combination";
		}
    ?>

    <!-- ************************************************************************
    ***     Footer Links					                                  ***
	************************************************************************ -->         	 
	<div class='footer'>
	<?php include '50. footer.php'; ?>	
	</div>

    </body>
</html>	

