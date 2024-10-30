<!doctype  html >

   <html lang="en"> 
   <head>
   <title> Consult Login </title>
   <link rel="icon" type="image/x-icon" href="images/zmaristlogo.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

       <?php
   echo '
	<style>
        #column {
            display: none;
        }
        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: red;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>';
       ?>
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


    <div class="block1" style="margin-top: 60px;">   
	    <h1>Authentication 2</h1>	  		 
    </div>

        <p>
    <!-- exercise instructions -->
            <table>
            <tr class="block1">
                <td>  <h3> Exercise Instructions </h3>			</td> 		 
                <td>  <h3> Exercise Hint </h3>						    </td> 		 
            </tr>

            <tr class="block2">
                <td>  
                    <p> Without having any previous knowledge of the login credentials except the information on the Tokash Consulting page. Come up with usernames and passwords to login to this page.
                </td>
                <td id="column1" style="display: none;">  
                    <p> Think of usernames and passwords that could be specific to the Tokash Consulting page for this exercise.
				    <script> 
                    setTimeout(() => { document.getElementById("column1").style.display = "block"; }, 600000); </script>
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
			    if($uname == 'atokash' or $uname == 'username' or $uname == 'andrew.tokash' or $uname == 'demo') {
			        if($psw == 'atokash' || $psw == 'username' || $psw == 'alex' || $psw == 'demo') {
                        echo "<br><h1 class='block1' style='border: none; color: green; font-size: 30px;'><b>
                                Welcome, $uname!</b></p>";
                        echo "<h1 style='color: green;'> <a href='03.2 consult_login.php'> Try Other Usernames
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

