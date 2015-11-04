/* Hospital-Management-System
Here I create HMS using PHP and MySQL
Insert doctor details page */


<?php

    include_once 'hms_class_doc.php';
    $doctor = new Doctor();

    // Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
    if (isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $register = $doctor->reg_doctor($name, $address, $phone,$gender,$specialist);
        if ($register) {
            // Registration Success
            echo 'Registration  successful ';
        } else {
            // Registration Failed
            echo 'Registration failed. please try again';
        }
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
      
        <title>Doctor Deatils</title>
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
                else if(form.address.value == ""){
                    alert( "Enter address." );
                    return false;
                }
                else if(form.phone.value == ""){
                    alert( "Enter phone." );
                    return false;
                }
                else if(form.gender.value == ""){
                    alert( "Enter gender." );
                    return false;
                }
                else if(form.specialist.value == ""){
                    alert( "Enter specialist." );
                    return false;
                }
                
            } 
	</script> 
    </head>
    <body>
        <body>
        <div id="container">
            <h1>Add Doctor Details</h1>
            <form action="" method="post" name="reg">
                <table>
                    <tr>
                        <th> Name:</th>
                        <td><input type="text" name="name" required></td>
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
                        <th>Gender:</th>
                        <td><input type="text" name="gender" required></td>
                    </tr>  
                    <tr>
                        <th>Specialist:</th>
                        <td><input type="text" name="specialist" required></td>
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

