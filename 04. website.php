<!doctype  html >

   <html lang="en"> 
   <head>
   <title> Website Vulnerability</title>
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
	<div class="block1" style="margin-top: 60px;"> <h1> Website Vulnerabilities </h1>	</div>	  		 
	<table >   
		<tr class="block2">
			<td>  <q> A website vulnerability is a software code flaw/ bug, system 
						misconfiguration, or some other weakness in the website/ web 
						application or its components and processes. Web application 
						vulnerabilities enable attackers to gain unauthorized access 
						to systems/ processes/mission-critical assets of the 
						organization. Having such access, attackers can orchestrate 
						attacks, takeover applications, engage in privilege escalation 
						to exfiltrate data, cause large-scale service disruption, and 
						so on. With a clear understanding of what website 
						vulnerabilities are and how they can be prevented, organizations 
						can be better equipped to avert attacks and harden their 
						security posture.	</q>											</td> 		 
		</tr>
	</table>


    <?php
       echo '
		<table>
			<tr>
				<td>
					<img src="images/zvulnerabilities.png" 
								style="height:23vh; border-radius: 0; padding-left: 100px; ">
				</td>
				<td>
					<h1> <a href="04. grades.php?role=student"> View Student Grades </a> </h1>
				</td>
				<td>
					<img src="images/zvulnerabilities.jpg" style="height:23vh; border-radius: 0; ">
				</td>
			</tr>
		</table>
		<img	src="images/zmaristlogo.png" 
		style="
				display: block;
				margin-left: auto;
				margin-right: auto;
				width: 26vh;
				height: 26vh;">					

		';
    ?>

    <!-- ************************************************************************
    ***     Footer Links					                                  ***
	************************************************************************ -->         	 
	<div class='footer'>
	<?php include '50. footer.php'; ?>	
	</div>

    </body>
</html>	

