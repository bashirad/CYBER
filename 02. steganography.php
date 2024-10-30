<html lang="en"> 
        <!-- **************************************************************************************** 
        ***                    Intro to Cyber  Exercises - ei01.HTML                              ***  
        ***                    **************************************                             ***	 
        ***  22/04/24  AT  Original file                                                          ***
        ***************************************************************************************** -->
   <head>
       <title> Steganography  </title>
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
            <h1>Steganography </h1>		  		 
        </div>

        <!-- explain the topic of the exercise -->
        <table>   
	        <tr class="block2">
		        <td>  <p> According to comptia.org, <q>Steganography is the practice of hiding a secret message 
                inside of (or even on top of) something that is not secret. That something can be just about 
                anything you want. These days, many examples of steganography involve embedding a secret piece 
                of text inside of a picture. Or hiding a secret message or script inside of a Word or Excel document.
                <br><br>The purpose of steganography is to conceal and deceive. It is a form of covert communication and can 
                involve the use of any medium to hide messages. It&rsquo;s not a form of cryptography, because it doesn&rsquo;t 
                involve scrambling data or using a key. Instead, it is a form of data hiding and can be executed in 
                clever ways. Where cryptography is a science that largely enables privacy, steganography is a practice 
                that enables secrecy and deceit.</q> Steganography can take any form of media like text, video etc.  
				</td> 		 
	        </tr>
        </table>

        <!-- Exercise 1 Instructions and Hints -->
        <table>
            <tr class="block1">
                <td>  <h3> Exercise 1 Instructions </h3>			</td> 		 
                <td>  <h3> Exercise 1 Hint </h3>						    </td> 		 
            </tr>

            <tr class="block2">
                <td>  
                    <p> Suppose that your best friend, Peter, went missing in a hostile area. It is highly likely that your
                                friend is captured by the enemy. <br>After 5 days, he sent the following message. Using the message,
                                can you find out if he is in trouble or not?
				    <test style="color: white"> ------------------------------------------------------------------- 
				    ------------------</test>																		
                </td>
                <td id="column1" style="display: none;">  
                    <p> Combine letters from the different sentences of the paragraph.			 		 
				    <script> 
                    setTimeout(() => { document.getElementById("column1").style.display = "block"; }, 600000); </script>
                    <test style="color: white"> ------------------------------------------------------------------- </test>
                </td>
            </tr>
		</table>
		
		<table>
            <tr class="block2">
                <td>	
                    <h4> Message says: </h4>
					<p> <q>Hello! Everything is going fine. Lots of things to do. Please remember to feed my fish.
                        Maybe you can send a picture. Everyone here has been nice.</q>                              
                </td>
            </tr>

            <tr class="block2">
                <td>	
                    <p><p><p><p>							                                                
                </td>
                <td>	
                    <p><p><p><p>							                                                
                </td>
            </tr>
        </table>

        <!-- Exercise 2 Instructions and Hints -->
        <table>
            <tr class="block1">
                <td>  <h3> Exercise 2 Instructions </h3>			</td> 		 
                <td>  <h3> Exercise 2 Hint </h3>					</td> 		 
            </tr>

            <tr class="block2">
                <td>  
                    <p> Looking at the three sentences below, find the encoded message. 
				    <test style="color: white"> --------------------------------------- 
				    ------------------</test>																		    
                </td>
                <td id="column3" style="display: none;">  
                    <p> Try differnet combinations of the same letters.			 		 
				    <script> 
                    setTimeout(() => { document.getElementById("column3").style.display = "block"; }, 600000); </script>
                    <test style="color: 
                    white"> ------------------------------------------------------------------------ </test>             
                </td>
            </tr>
		</table>
		
		<table>
            <tr class="block2">
                <td>	
					<h4> Sentences are: </h4>
                </td>
            </tr>
            <tr class="block2">
                <td>	
					the main building exit or entry is this. please turn left or right.  
                    master plan of the rover includes rear entrance or the west exit.
                </td>
            </tr>

        </table>
        <p>
        <!-- Exercise 3 Instructions and Hints -->
        <table>

            <tr class="block1">
                <td>  <h3> Exercise 3 Instructions </h3>			        </td> 		 
                <td>  <h3> Exercise 3 Hint </h3>						    </td> 		 
            </tr>

            <tr class="block2">
                <td>  
                    <p> Find if the picture tells you when to meet. 
				    <test style="color: white"> ------------------------------------------------------------------- 
				    ------------------</test>																		
                </td>
                <td id="column2" style="display: none;">  
                    <p> look at the PROPERTIES of the file and you will see the message.			 		 
				    <script> 
                    setTimeout(() => { document.getElementById("column2").style.display = "block"; }, 600000); </script>
				    <test style="color: white"> ----------------------------------------------------- </test>
                </td>
            </tr>
		</table>
		
		<table>
            <tr class="block2">
                <td>	
					<img style="border-radius: 0; height: 40vh;" src='images/ei02-pic.jpg'>					    </td>
            </tr>

            <tr class="block2">
                <td>	<p><p><p><p>							                                                </td>
                <td>	<p><p><p><p>							                                                </td>
            </tr>
        </table>
		
        <!-- Exercise 4 Instructions and Hints -->
        <table>
            <tr class="block1">
                <td>  <h3> Exercise 4 Instructions </h3>			</td> 		 
                <td>  <h3> Exercise 4 Hint </h3>					</td> 		 
            </tr>

            <tr class="block2">
                <td>  
                    <p> Find if the picture tells you when to meet. 
				    <test style="color: white"> ------------------------------------------------------------------- 
				    ------------------</test>																		
                </td>
                <td id="column">  
                    <p> Edit the file (with notepad) and you will see the message.	
                    <script> setTimeout(() => { document.getElementById("column2").style.display = "block"; }, 600000); </script>
				    <test style="color: white"> ------------------------------------------------------------------- </test>
                </td>
            </tr>
		</table>
		
		<table>
            <tr class="block2">
                <td>	
					<img style="border-radius: 0; height: 60vh;" src='images/ei01-pic.jpg'>						
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