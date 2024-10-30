<!doctype  html >
	 <!-- ***************************************************************************************** 
     ***                    Intro to Cyber  Exercises - index.php                             ***  
     ***                    **************************************                             ***	 
     ***  07/13/22  BD  Original file                                                          ***
	 ***************************************************************************************** -->
	<html lang="en"> 
	<head>
	<title> Home  </title>
	<link rel="icon" type="image/x-icon" href="images/zmaristlogo.png"> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- ***********************************************************************
	***     Default styles for all website  files                        ***
	************************************************************************ -->     
	 <link rel="stylesheet" href="css/style.css" />

	<!-- ***********************************************************************
    ***     Menu Links					                                  ***
	************************************************************************ -->         	 
	<div class='menu'>
		<?php include '000. navigation.php'; ?>	
	</div>

	</head>    

<!-- ********************************************************************************************* --> 

	<body>    
		<img src="images/zcyberheader.jpg" style="border-radius: 0; height: auto;">	
		<!-- ************************************************************************ -->
		<div class="block1" >
			<h1> Introduction to Cybersecurity Exercises</h1>	  		 
		</div>

		<table class="block2">   
			<tr>
				<td>   
					 Designed and coded by <b> Bashir Dahir </b>as part of the Marist Fellowhip Program with <b>Professor Andrew Tokash </b>. Please contact the authors for access to the 
					Instructors guide. 
				</td>
			</tr>
			<tr>
				<td>   
					This website is a collection of exercises for students learning cybersecurity. 
					It was specifically developed for students taking the Marist College CMPT416 course, 
					but may be applicable to other courses as well. 
				</td>
			</tr>
		</table>

		<table >
			<tr  class="block2">
				<td>  
					<a href="index.php" > 
					<img src="images/zmaristlogo.png" style=" width: 13w; height: 20vh;">	
					</a>
				</td> 		 

				<td> 					  
					<a href="01. reconnaissance.php" >	
					<img src="images/zrecon.png" style="height:18vh; width: 13w;">
					</a>
				</td> 		 
				<td>  
					<a href="02. steganography.php" >
					<img src="images/zsteganography.jpg" style="height:18vh; ">	
					</a>
				</td> 		 
				<td>  
					<a href="03. authentication.php" >
					<img src="images/zauthentication3.webp" style="height:18vh; ">
					</a>
				</td> 		 
				<td>  
					<a href="04. website.php" >
					<img src="images/zvulnerabilities.png" style="height:18vh; ">
					</a>
				</td> 	
				<td>  
					<a href="server/05. server_info.php" >
					<img src="images/zdirectory_listing.webp" style="height:18vh; ">	
					</a>
				</td> 		 
			</tr>

			<tr class="block2">
				<td> 					  
					<a href="https://tryhackme.com/"> <img src="images/ztryhackme.png" 
					style="border-radius: 0; height:20vh; "> </a>	
					<br> Click on the above TryHackMe Logo and note: Login Account required.
				</td> 		 
				<td>  
					<a href="06. Email_spoofing.php" >
					<img src="images/zspoofed.jpg" style="height:20vh; ">	
					</a>
				</td> 		 
				<td>  
					<a href="07. sql_injection.php" >
					<img src="images/zsqlinjection.jpg" style="height:20vh; width:30vh;">
					</a>
				</td> 		 
				<td>  
					<a href="08. cryptography.php" >
					<img src="images/zcryptography.jpg" style="height:20vh; ">
					</a>
				</td> 	
				<td>  
					<a href="09. google_hacking.php" >
					<img src="images/zgoogle.jpeg" style="height:20vh; ">	
					</a>
				</td> 		 
				<td>  
					<a href="10. scada.php" > 
					<img src="images/zscada.jpg" style=" width: 13w; height: 20vh;">	
					</a>
				</td> 	
			</tr>
		</table>

		<!-- ************************************************************************
		***     Footer Links					                                  ***
		************************************************************************ -->         	 
		<div class='footer'>
			<?php include '50. footer.php'; ?>	
		</div>
	</body>
</html>	