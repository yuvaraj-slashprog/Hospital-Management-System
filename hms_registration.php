/* Hospital-Management-System
Here I create HMS using PHP and MySQL
Registration page class */

<?php

    include_once 'hms_class_user.php';
    $user = new User();

    // Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
    if (isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $register = $user->reg_user($name, $password,$full_name, $email);
        if ($register) {
            // Registration Success
            echo 'Registration  successful <a href="hms_login.php">Click here</a> to login';
        } else {
            // Registration Failed
            echo 'Registration failed. Email or Username already exits please try again';
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
      
        <title>Register</title>
		<style>
            #container{width:400px; margin: 0 auto;}
		</style>
		<script language="javascript" type="text/javascript"> 
		    function submitreg() {
                var form = document.reg;
				if(form.name.value == ""){
                    alert( "Enter name." );
                    return false;
                }
                else if(form.password.value == ""){
                    alert( "Enter password." );
                    return false;
                }
                else if(form.full_name.value == ""){
                    alert( "Enter Full Name." );
                    return false;
                }
                else if(form.email.value == ""){
                    alert( "Enter email." );
                    return false;
                }
            } 
	</script> 
    </head>
    <body>
        <body>
        <div id="container">
            <h1>Registration Here</h1>
            <form action="" method="post" name="reg">
                <table>
                    <tr>
                        <th> Name:</th>
                        <td><input type="text" name="name" required></td>
                    </tr>
                   <tr>
                        <th>Password:</th>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                    <tr>
                        <th>Full Name:</th>
                        <td><input type="text" name="full_name" required></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><input type="text" name="email" required></td>
                    </tr>
                    
                        <td>&nbsp;</td>
                        <td><input type="submit" name="submit" value="Register" onclick="return(submitreg());"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><a href="hms_login.php">Already registered! Click Here!</a></td>
                    </tr>
                    
                </table>
            </form>
        </div>
    </body>
    </body>
</html>
