/* Hospital-Management-System
Here I create HMS using PHP and MySQL
Insert patient details */


<?php

    include_once 'hms_class_patient.php';
    $patient = new Patient();

    // Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
    if (isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $register = $patient->reg_patient($full_name, $address, $phone, $age, $gender, $occupation);
        if ($register) {
            // Registration Success
            echo 'Registration  successful <a href="hms_login.php">Click here</a> to login';
        } else {
            // Registration Failed
            echo 'Registration failed. please try again';
        }
    }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
      
        <title>Patient</title>
		<style>
            #container{width:400px; margin: 0 auto;}
		</style>
		<script language="javascript" type="text/javascript"> 
		    function submitreg() {
                var form = document.reg;
				if(form.full_name.value == ""){
                    alert( "Enter full_name." );
                    return false;
                }
                else if(form.address.value == ""){
                    alert( "Enter address." );
                    return false;
                }
                else if(form.phone.value == ""){
                    alert( "Enter phone." );
                    return false;
                }
                else if(form.age.value == ""){
                    alert( "Enter age." );
                    return false;
                }
                else if(form.gender.value == ""){
                    alert( "Enter gender." );
                    return false;
                }
                else if(form.occupation.value == ""){
                    alert( "Enter occupation." );
                    return false;
                }
            } 
	</script> 
    </head>
    <body>
        <body>
        <div id="container">
            <h1>Add Patient Details</h1>
            <form action="" method="post" name="reg">
                <table>
                    <tr>
                        <th> Full_Name:</th>
                        <td><input type="text" name="full_name" required></td>
                    </tr>
                   <tr>
                        <th>Address:</th>
                        <td><input type="text" name="address" required></td>
                    </tr>
                    <tr>
                    <tr>
                        <th>Phone:</th>
                        <td><input type="text" name="phone" required></td>
                    </tr>
                    <tr>
                        <th>Age:</th>
                        <td><input type="text" name="age" required></td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td><input type="text" name="gender" required></td>
                    </tr>
                    <tr>
                        <th>Occupation:</th>
                        <td><input type="text" name="occupation" required></td>
                    </tr>
                    
                        <td>&nbsp;</td>
                        <td><input type="submit" name="submit" value="Register" onclick="return(submitreg());"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><a href="hms_home.php"> Click Here to Home!</a></td>
                    </tr>
                    
                </table>
            </form>
        </div>
    </body>
    </body>
</html>
