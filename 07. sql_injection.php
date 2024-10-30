<!doctype  html >

    <html lang="en"> 
    <head>
        <title> SQL Injection </title>
        <link rel="icon" type="image/x-icon" href="images/zmaristlogo.png">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <!-- ******************************************************************* -->
        <!-- ***      Default styles for all website  files					 *** -->
	    <!-- ******************************************************************* -->         	 
	    <link rel="stylesheet" href="css/style.css">

        <!-- ******************************************************************* -->
        <!-- ***     Menu Links					                             *** -->
	    <!-- ******************************************************************* -->         	 
        <style>
            input[type=submit] {
                background-color: #EA3B23;
            }
        </style
    </head>  
        
	<div class='menu'>
	    <?php include '000. navigation.php'; ?>	 
	</div>  

    <body>
	    <div class="block1" style="margin-top: 60px;"> <h1> SQL Injection </h1>	</div>	  
        <div>                   
            <h3> Overview</h3> 
            There are four main numbered sections on this web page. 
            First comes the login section, in which you enter the required information to start the exercise. 
            Second section displays the information you entered in section one. 
                The third section displays the SQL Query that should be submitted to the
            company&rsquo;s database. Finally, the fourth section displays the company&rsquo;s database,
            which is not available for the hacker to see. User information is displayed solely for the 
            purpose of giving you more context in this exercise.
            </div>
            <div>
                <table>
                    <tr class="block1">
                        <td>
                            <h3> Exercise Instructions </h3>
                        </td>
                        <td>    
                            <h3> Exercise Hints </h3>
                        </td>
                    </tr>
                    <tr class="block2">
                        <td>
                        Company Database displays valid emails and passwords. Can you login without them, using SQL Injection? 
                            <hr class="mb-3">
                        </td>
                        <td  id="column1" style="display: none;">    
                            Make sure to make the formed SQL query a true statement. 
				            <script> 
                            setTimeout(() => { document.getElementById("column1").style.display = "block"; }, 600000); </script>
                        </td>
                            <hr class="mb-3">
                    </tr>
                    <tr>
                        <td>
                            <form action= "07. sql_injection.php" method = "post">
                                <div class="container">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3> 1. Login </h3>
                                            <p> Please enter your email, phone number and password </p>

                                            <label for="email"><b>Email </b> </label>
                                            <input class="form-control" type="email" name="email" placeholder="Email" required>

                                            <label for="phonenumber"><b>Phone Number </b> </label>
                                            <input class="form-control" type="text" name="phonenumber" placeholder="Phone Number" required>

                                            <label for="password"><b>Password </b> </label>
                                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                                            <hr class="mb-3">
                                            <input class="btn btn-primary" type="submit" name="create" value="Sign In">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td>
                            <div class="container">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3> 2. User Input Displayed</h3>
                                        <table>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <b> Entered Email is: </b> <br>
                                                        <b>Entered Phone Number is: </b>  <br>
                                                        <b>Entered Password is: </b> 
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <?php
                                                            if(isset($_POST['create'])) {

                                                                $email          = $_POST['email'];
                                                                $phonenumber    = $_POST['phonenumber'];
                                                                $password       = $_POST['password'];
                                                                
                                                                echo " $email <br>";
                                                                echo " $phonenumber <br>";
                                                                echo " $password";
                                                            }
                                                        ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <hr class="mb-3">
                                        <h3> 3. SQL Query Displayed</h3>
                                        <h5> User Input as a SQL Query</h5>
                                        <table>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <?php
                                                            if(isset($_POST['create'])) {

                                                                $email          = $_POST['email'];
                                                                $phonenumber    = $_POST['phonenumber'];
                                                                $password       = $_POST['password'];
                                                                
                                                                echo "SELECT * FROM users 
                                                                        WHERE email='$email' AND 
                                                                        phonenumber='$phonenumber' AND
                                                                        password='$password'";
                                                            }
                                                        ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <hr class="mb-3">
                                        <?php
                                            if(isset($_POST['create'])) {
                                                $email          = $_POST['email'];
                                                $phonenumber    = $_POST['phonenumber'];
                                                $password       = $_POST['password'];

                                                if ($email == 'peter.parker1@marist.edu' 
                                                    or $email == 'linda.smith1@marist.edu'
                                                    or $email == 'sarah.nor1@marist.edu') {
                                                    if ($password == 'peter' 
                                                        or $password == 'linda'
                                                        or $password == 'sarah') {
                                                        echo "<h3> 4. Login Status</h3>";
                                                        echo "<h1 style='color: green;'> You have successfully logged in </h1>";
                                                    }
                                                }
                                                else if (substr($password, -7, 7) == "'OR'1=1" or substr($password, -7, 7) ==                                                                                       "'or'1=1") {
                                                    $last = substr($password, -7, 7);
                                                    echo "<h3> 4. Login Status</h3>";
                                                    echo "<h1 style='color: green;'> You have successfully logged in </h1>";
                                                }
                                            }
                                            else {
                                                echo "<h3> 4. Company Database</h3>";
                                                echo '
                                                <table>
                                                    <tr>
                                                        <th> 
                                                            First Name
                                                        </th>
                                                        <th>
                                                            Last Name
                                                        </th>
                                                        <th> 
                                                            Email
                                                        </th>
                                                        <th>
                                                            Phone Number
                                                        </th>
                                                        <th>
                                                            Password
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td> 
                                                            Peter
                                                        </td>
                                                        <td>
                                                            Parker
                                                        </td>
                                                        <td> 
                                                            peter.parker1@marist.edu
                                                        </td>
                                                        <td>
                                                            123456789
                                                        </td>
                                                        <td>
                                                            peter
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> 
                                                            Linda
                                                        </td>
                                                        <td>
                                                            Smith
                                                        </td>
                                                        <td> 
                                                            linda.smith1@marist.edu
                                                        </td>
                                                        <td>
                                                            123456789
                                                        </td>
                                                        <td>
                                                            linda
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> 
                                                            Sarah 
                                                        </td>
                                                        <td>
                                                            Nor
                                                        </td>
                                                        <td> 
                                                            sarah.nor1@marist.edu
                                                        </td>
                                                        <td>
                                                            123456789
                                                        </td>
                                                        <td>
                                                            sarah
                                                        </td>
                                                    </tr>
                                                </table>
                                                    ';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </td>
                        </div>
                    </tr>
                </table>
            </div>
            

        <!-- ************************************************************************
        ***     Footer Links					                                  ***
	    ************************************************************************ -->         	 
	    <div class='footer'>
	    <?php include '50. footer.php'; ?>	
	    </div>

    </body>
</html>	

