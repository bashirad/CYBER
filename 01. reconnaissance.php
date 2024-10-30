<!doctype  html >
	<!-- ********************************************************************************************* 
     ***                    Intro to Cyber  Exercises - INDEX.PHP                             ***  
     ***                    **************************************                             ***	 
     ***  22/05/23  AT  Original file                                                          ***
	 ***************************************************************************************** -->
	<html lang="en"> 
	<head>
		<title> 
			Reconnaissance  
		</title>

		<link rel="icon" type="image/x-icon" href="images/zmaristlogo.png"> 
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<!-- ************************************************************************
		***     Default styles for all website  files                        ***
		************************************************************************ -->     
		 <link href="css/style.css" rel="stylesheet">

		<!-- ************************************************************************
		***     Menu Links					                                  ***
		************************************************************************ -->         	 
		<div class='menu'>
			<?php include '000. navigation.php'; ?>	
		</div>  
	</head>   
<body>	
		<div class="block1" style="margin-top: 60px;">
		<h1>Reconnaissance</h1>		  		 
	</div>
<!-- ************************************************************************ -->
<!-- explain the topic of the exercise -->
<table>   

	<tr class="block2">
		<td>  <p> Reconnaissance is a way to gather information about the targeted system. 
		The hacker is not directly connected to the target, instead the hacker utilizes other 
		networking tools to gather more information in addition to available public information. 
		Other times hackers utilize detectable tools like &#39traceroute, ping, telnet, Nmap, 
		and a web browser. <br> From the above information, we notice there are passive and active 
		reconnaissance.  																			</td> 		 
	</tr>
</table>

<table>

	<tr class="block1">
		<td>  <h3> Passive Reconnaissance	</h3>													</td> 		 
		<td>  <h3> Active Reconnaissance	</h3>													</td> 		 
	</tr>

	<tr class="block2">
		<td>  <img src="images/zpassive.png" style=" width: 13w; height: 23vh; ">					</td> 		 
		<td>  <img src="images/zactive.png" style=" width: 13w; height: 23vh; border-radius: 0;">	</td> 		 
	</tr>

	<tr class="block2">
		<td>  <p> Click below for More Info			&nbsp &nbsp	&nbsp								</td> 		 
		<td>  <p> Click below for More Info			&nbsp &nbsp	&nbsp								</td> 		 
	</tr>

	<tr class="block2">
		<td style= "text-align: center;">  <a href="01.1 passive_reconnaissance.php">  Passive
		Reconnaissance Exercise </a>																</td> 		 
		<td style= "text-align: center;">  <a href="01.2 active_reconnaissance.php" >  Active 
		Reconnaissance  Exercise </a>																</td> 		 
	</tr>

</table>

<!-- ************************************************************************ -->
	<br><br>	

<!-- ************************************************************************
    ***     Footer Links					                                  ***
	************************************************************************ -->         	 
	<div class='footer'>
	<?php include '50. footer.php'; ?>	
	</div>
	</body>
</html>	
	  