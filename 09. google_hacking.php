<html lang="en"> 
        <!-- **************************************************************************************** 
        ***                    Intro to Cyber  Exercises - ei01.HTML                              ***  
        ***                    **************************************                             ***	 
        ***  22/04/24  AT  Original file                                                          ***
        ***************************************************************************************** -->
   <head>
        <title> 
            Google Hacking  
        </title>
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


        <!-- ********************************************************************************************* --> 
    <body>    
        <div class="block1" style="margin-top: 60px;">
            <h1> Google Hacking </h1>		  		 
        </div>

        <!-- explain the topic of the exercise -->
        <table>   
	        <tr>
		        <td>  
                    <p> According to securityTrails.com, <q>A Google Dork, also known as Google Dorking or Google hacking, is a         valuable resource for security researchers. For the average person, Google is just a search engine used to      find text, images, videos, and news. However, in the infosec world, Google is a useful hacking tool.
                        How would anyone use Google to hack websites?

                        Well, you cannot hack sites directly using Google, but as it has tremendous web-crawling capabilities, it can index almost anything within your website, including sensitive information. This means you could be    exposing too much information about your web technologies, usernames, passwords, and general vulnerabilities without even knowing it.

                        In other words: Google Hacking is the practice of using Google to find vulnerable web applications and servers by using native Google search engine capabilities.</q>   
				</td> 		 
	        </tr>
        </table>

        <h3> Google Hacking Basic Commands </h3>
        <object  data="Google Hacking Commands.txt" type="text/plain" width="75%" height="25%"> </object> 

        <!-- Exercise 1 Instructions and Hints -->
        <table style="margin-top:25px;">
            <tr class="block1">
                <td>  <h3> Exercise 1 Instructions </h3>			        </td> 		 
                <td>  <h3> Exercise 1 Hint </h3>						    </td> 		 
            </tr>
            <tr >
                <td style="text-align: center;">  
                    <p style="text-align: center; "> Do a very specific Google search to find no less than 5 results of the pdf files that are uploaded to atokash.net. 																	
                </td>
                <td id="column1" style="display: none;">  
                    <p> Use some of the commands included in the text file above		
				    <script> setTimeout(() => { document.getElementById("column1").style.display = "block"; }, 600000); </script>
                </td>
            </tr>
		</table>
		

        <!-- Exercise 2 Instructions and Hints -->
        <table>
            <tr class="block1">
                <td>  <h3> Exercise 2 Instructions </h3>			</td> 		 
                <td>  <h3> Exercise 2 Hint </h3>					</td> 		 
            </tr>

            <tr>
                <td style="text-align: center;">  
                    <p> Find three password excel worksheet files that belong to any website. <p> <l style="color: red;">PLEASE DO NOT OPEN ANY OF THE FILES OR SHARE THE INFORMATION! </l> <p>These excercises are for educational purpose only. 
                </td>
                <td id="column3" style="display: none;">  
                    <p> Use some of the commands included in the text file above			
				    <script> 
                    setTimeout(() => { document.getElementById("column3").style.display = "block"; }, 600000); </script>
                </td>
            </tr>
		</table>
		
        <p>
        <!-- Exercise 3 Instructions and Hints -->
        <table>
            <tr class="block1">
                <td>  
                    <h3> 
                        Exercise 3 Instructions  
                    </h3>			        
                </td> 		 
                <td>  
                    <h3> 
                        Exercise 3 Hint          
                    </h3>					
                </td> 		 
            </tr>

            <tr>
                <td style="text-align: center;">  
                    Find information about the SQL database structure of a website. 
                </td>
                <td id="column2" style="display: none;">  
                    <p> Use some of the commands included in the text file above. the log command could help with this search.
				    <script> 
                    setTimeout(() => { document.getElementById("column2").style.display = "block"; }, 600000); </script>
                </td>
            </tr>
		</table>


        <!-- ************************************************************************
        ***     Footer Links					                                  ***
	    ************************************************************************ -->         	 
	    <div class="footer">
	        <?php include '50. footer.php'; ?>	
	    </div>
    </body>
</html>