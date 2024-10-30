<html lang="en"> 
        <!-- **************************************************************************************** 
        ***                    Intro to Cyber  Exercises - ei01.HTML                              ***  
        ***                    **************************************                             ***	 
        ***  22/04/24  AT  Original file                                                          ***
        ***************************************************************************************** -->
   <head>
       <title> Cryptography  </title>
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
            <h1> Cryptography </h1>		  		 
        </div>

        <!-- explain the topic of the exercise -->
        <table>   
	        <tr class="block2">
		        <td>  
                    <p> According to geeksforgeeks.org, <q>Cryptography is technique of securing information and communications through 
                    use of codes so that only those person for whom the information is intended can understand it and process it. 
                    Thus preventing unauthorized access to information. 
                    The prefix - crypt - means - hidden - and suffix graphy means - writing.</q>   
				</td> 		 
	        </tr>
	        <tr class="block2">
		        <td>  
                    <img src="images/zcryptography.png">
				</td> 		 
	        </tr>
        </table>

        <!-- Exercise 1 Instructions and Hints -->
        <table>
            <tr class="block1">
                <td>  <h3> Exercise 1 Instructions </h3>			        </td> 		 
                <td>  <h3> Exercise 1 Hint </h3>						    </td> 		 
            </tr>
            <tr class="block2">
                <td>  
                    <p> Look at the following sentence, and decrypt the message.																		
                </td>
                <td id="column1" style="display: none;">  
                    <p> Use Vignere Cipher: key is LEMON		
				    <script> setTimeout(() => { document.getElementById("column1").style.display = "block"; }, 600000); </script>
                </td>
            </tr>
		</table>
		
                    <h4> Message says: </h4>
					<p> LXFOPVEFRNHR                              

        <!-- Exercise 2 Instructions and Hints -->
        <table>
            <tr class="block1">
                <td>  <h3> Exercise 2 Instructions </h3>			</td> 		 
                <td>  <h3> Exercise 2 Hint </h3>					</td> 		 
            </tr>

            <tr class="block2">
                <td>  
                    <p> Look at the following sentence, and decrypt the message. 
                </td>
                <td id="column3" style="display: none;">  
                    <p> Use Ceaser Cipher			
				    <script> 
                    setTimeout(() => { document.getElementById("column3").style.display = "block"; }, 600000); </script>
                </td>
            </tr>
		</table>
		
		<table>
            <tr class="block2">
                <td>	
					<h4> Sentence is: </h4>
                </td>
            </tr>
            <tr class="block2">
                <td>	
					exxego lettirw ex xlviiXmr xli qsvrmrk syv xmqi dsri 
                </td>
            </tr>
        </table>
        <p>
        <!-- Exercise 3 Instructions and Hints -->
        <table>
            <tr class="block1">
                <td>  <h3> Exercise 3 Instructions  </h3>			        </td> 		 
                <td>  <h3> Exercise 3 Hint          </h3>					</td> 		 
            </tr>

            <tr class="block2">
                <td>  
                    Look at the following sentence, and decrypt the message. 
                </td>
                <td id="column2" style="display: none;">  
                    <p> Try building an alphanumeric table with corresponding letters, for the normal order and its reverse.
                    For example, A corresponds to Z and B corresponds to Y. 0 corresponds to 9 and 1 corresponds to 8.
				    <script> 
                    setTimeout(() => { document.getElementById("column2").style.display = "block"; }, 600000); </script>
                </td>
            </tr>
		</table>

					<h4> Sentence is: </h4>
                    <p>R OLEV NB RMGIL GL XBYVIHVXFIRGB XLFIHV. 

        <!-- ************************************************************************
        ***     Footer Links					                                  ***
	    ************************************************************************ -->         	 
	    <div class='footer'>
	        <?php include '50. footer.php'; ?>	
	    </div>
    </body>
</html>