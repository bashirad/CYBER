<html lang="en"> 
        <!-- **************************************************************************************** 
        ***                    Intro to Cyber  Exercises - ei01.HTML                              ***  
        ***                    **************************************                             ***	 
        ***  22/04/24  AT  Original file                                                          ***
        ***************************************************************************************** -->
   <head>
        <title> 
            SCADA  
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
            <h1> SCADA </h1>		  		 
        </div>

        <!-- explain the topic of the exercise -->
        <table>   
	        <tr>
		        <td>  
                    <p> According to techtarget.com, <q>Shodan (Sentient Hyper-Optimised Data Access Network) is a search engine designed to map and gather information about internet-connected devices and systems. Shodan is sometimes referred to as a search engine for the internet of things (IoT).  Applications of the software include market research, vulnerability analysis and penetration testing, as well as hacking.

                    Shodan makes it possible to detect devices that are connected to the internet at any given time, the locations of those devices and their current users. Such devices could be in almost any type of system, including business networks, surveillance cameras, industrial control systems (ICS) and smart homes. Shodan attempts to grab the system&rsquo;s banner directly, gathering the data by way of the associated server&rsquo;s ports. Banner grabbing is a key step for penetration testing as it helps identify vulnerable systems. Shodan also searches corresponding exploits in the search platform&rsquo;s exploit section.</q>   
				</td> 		 
	        </tr>
        </table>
        <table>
            <tr>
                <td>
                    <img src="images/zscadavulner.jpg" style=" border-radius: 0;width: 16w; height: 25vh;">
				</td> 		 
                <td>
                    <img src="images/zscada.jpg" style=" border-radius: 0;width: 16w; height: 25vh;">
				</td> 		 
                <td>
                    <img src="images/zscadavulnerab.webp" style=" border-radius: 0;width: 16w; height: 25vh;">
				</td> 		 
                <td>
                    <img src="images/zscadavulnera.jpg" style=" border-radius: 0;width: 16w; height: 25vh;">
				</td> 		 
	        </tr>
        </table>

        <!-- Exercise 1 Instructions and Hints -->
        <table style="margin-top: 40px;">
            <tr class="block1">
                <td>  <h3> Exercise 1 Instructions </h3>			        </td> 		 
                <td>  <h3> Exercise 1 Hint </h3>						    </td> 		 
            </tr>
            <tr>
                <td>  
                    <p> Visit the following link and search for Chicago. First look around the results page very well, then write down the top 5 organizations? <p> <a href="https://www.shodan.io/"> Shodan.io </a>										                </td>
                <td id="column1" style="display: none;">  
                    <p> Look at the left side and find the top 5 products of your search. 
				    <script> setTimeout(() => { document.getElementById("column1").style.display = "block"; }, 600000); </script>
                </td>
            </tr>
		</table>
        

        <!-- Exercise 2 Instructions and Hints -->
        <table>
            <tr class="block1">
                <td>  <h3> Exercise 2 Instructions </h3>			        </td> 		 
                <td>  <h3> Exercise 2 Hint </h3>						    </td> 		 
            </tr>
            <tr>
                <td>  
                    <p> Visit the following link and search for Chicago. First look around the results page very well, then write down the top 5 products? <p> <a href="https://www.shodan.io/"> Shodan.io </a>																		
                </td>
                <td id="column1" style="display: none;">  
                    <p> Look at the left side and find the top 5 products of your search. 
                    <!--    
                        Niagara Fox             2,041
                        Squid http proxy        911
                        nginx                   105
                        Apache httpd            77
                        AWS ELB                 67                    
                    -->
				    <script> setTimeout(() => { document.getElementById("column1").style.display = "block"; }, 600000); </script>
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