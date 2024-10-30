<!doctype  html >
<!-- ********************************************************************************************* 
     ***                    Intro to Cyber  Exercises - INDEX.PHP                             ***  
     ***                    **************************************                             ***	 
     ***  22/05/23  AT  Original file                                                          ***
	 ***************************************************************************************** -->
   <html lang="en"> 
   <head>
   <title> Active Reconnaissance  </title>
   <link rel="icon" type="image/x-icon" href="images/zmaristlogo.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<style>
      #column {
        display: none;
      }
    </style>

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
	<div class="block1" style="margin-top: 60px;">
		<h1> Active Reconnaissance </h1>	
	</div>		 

<!-- ************************************************************************ -->
<table>   
	<tr class="block2">
		<td> According to USNA, Active reconnaissance is synonymous with scanning 
		target&#8216s system and <q>gathering information, often indirectly, in a manner 
		likely to alert the subject of the surveillance.</q> 	</td>	 
	</tr>
</table>
<!-- Exercise Instructions and Hints -->
        <table>

            <tr class="block1">
                <td>  <h3> Exercise Instructions </h3>			</td> 		 
                <td>  <h3> Hints </h3>						    </td> 		 
            </tr>

            <tr class="block2">
                <td>  <p> Nmap is a network scanning tool that is used to gather information about 
				the target website. The following screenshot is an example of using Nmap on 
				a websit, which in this case is Atokash.net. Please answer the following questions 
				using the screenshot.
				<td id="column"> <p> All answers can be found in the screenshot	 	
				<script> setTimeout(() => { document.getElementById("column2").style.display = "block"; }, 600000); </script>
				</td>
			</tr>

            <tr class="block2">
                <td style="text-align: center;">	
					<object data="znmap.txt" type="text/plain"
					width="700" style="height: 200px">
					a href="znmap.txt">Nmap Example</a>
					</object>						</td>
                <td style="text-align: center;">	
					<img style="border-radius: 0; height: 30vh;" src='images/zquestions.jpg'>					</td>
            </tr>

            <tr class="block2">
                <td>	<p><p><p><p>							                                                </td>
                <td>	<p><p><p><p>							                                                </td>
            </tr>

        </table>
		
<!-- ************************************************************************
    ***     Footer Links					                                  ***
	************************************************************************ -->         	 
	<div class='footer'>
	<?php include '50. footer.php'; ?>	
	</div>

</html>	
	  