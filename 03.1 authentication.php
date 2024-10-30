<!doctype  html >

   <html lang="en"> 
   <head>
   <title> Authentication 1 </title>
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



    <table style="margin-top: 60px;">   
	    <tr class="block1">
		    <td> <h1>Authentication 1</h1>	</td>	  		 
	    </tr>
    </table>
    <p>
    <!-- exercise instructions -->
            <table>
            <tr class="block1">
                <td>  <h3> Exercise Instructions </h3>			</td> 		 
                <td>  <h3> Exercise Hint </h3>						    </td> 		 
            </tr>

            <tr class="block2">
                <td>  
                    <p> Without having any previous knowledge of the login credentials, come up with usernames and passwords to login to this page.
                </td>
                <td id="column1" style="display: none;">  
                    <p> Use common usernames and passwords for this Exercise.			 		 
				    <script> 
                    setTimeout(() => { document.getElementById("column1").style.display = "block"; }, 600000); </script>
                    <test style="color: white"> ------------------------------------------------------------------- </test>
                </td>
            </tr>
		</table>

        <?php
            if(isset($_POST['uname'])) {
                $uname = $_POST['uname'];
            }
            else {
                $uname = "";
            }

            if(isset($_POST['psw'])) {
                $psw = $_POST['psw'];
            }
            else {
                $psw = "";
            }


            if($_SERVER['REQUEST_METHOD'] == "GET") {
                echo "<form action = '" . $_SERVER['SCRIPT_NAME'] . "' method = 'POST'>";
                echo '
                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                </div>

                </form> ';
            }
            else {
			    if($uname == 'admin' or $uname == 'username' or $uname == 'adminstrator' or $uname == 'demo') {
			        if($psw == 'admin' || $psw == '123456' || $psw == 'qwerty' || $psw == '123456789') {
                        echo "<br><h1 class='block1' style='border: none; color: green; font-size: 30px;'><b>
                                Welcome, $uname!</b></p>";
                        echo "<h1 style='color: green;'> <a href='03.1 authentication.php'> Try Other Usernames
                                and Passwords </a> </h1>";
			        }
                    else {
                        $error_message = "Enter a valid password!";
                        echo "<h1> $error_message  <p> Entered Username: $uname <br> Entered Password: $psw <p>
                        <p class='block1'; style='color: green';>
                        To go back, click on the link below <br>
                        <h1> <a href='03.1 authentication.php'> Try Again </a> </h1>";
                    }
			    }
				else {
                    $error_message = "Enter a valid username!";
                    echo "<h1> $error_message  <p> Entered Username: $uname <br> Entered Password: $psw
                    <p class='block1'; style='color: green';>
                    To go back, click on the link below <br>
                    <h1> <a href='03.1 authentication.php'> Try Again </a> </h1>";
                }
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

