/* Hospital-Management-System
Here I create HMS using PHP and MySQL
Insert appointment details page */


<?php

    include_once 'hms_class_appointment.php';
    $appointment = new Appointment();

    // Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
    if (isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $register = $appointment->reg_appointment($appointment_id, $appointment_date, $appointment_time, $patient_id, $doctor_id);
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
      
        <title>Appointment</title>
		<style>
            #container{width:400px; margin: 0 auto;}
		</style>
		<script language="javascript" type="text/javascript"> 
		    function submitreg() {
                var form = document.reg;
				if(form.appointment_id.value == ""){
                    alert( "Enter appointment_id." );
                    return false;
                }
                else if(form.appointment_date.value == ""){
                    alert( "Enter appointment_date." );
                    return false;
                }
                else if(form.appointment_time.value == ""){
                    alert( "Enter appointment_time." );
                    return false;
                }
                else if(form.patient_id.value == ""){
                    alert( "Enter patient_id." );
                    return false;
                }
                else if(form.doctor_id.value == ""){
                    alert( "Enter doctor_id." );
                    return false;
                }
            } 
	</script> 
    </head>
    <body>
        <body>
        <div id="container">
            <h1>Add Appointment </h1>
            <form action="" method="post" name="reg">
                <table>
                    <tr>
                        <th> Appointment_id:</th>
                        <td><input type="text" name="appointment_id" required></td>
                    </tr>
                   <tr>
                        <th>Appointment_date:</th>
                        <td><input type="text" name="appointment_date" required></td>
                    </tr>
                    <tr>
                    <tr>
                        <th>Appointment_time:</th>
                        <td><input type="text" name="appointment_time" required></td>
                    </tr>
                    <tr>
                        <th>Patient_id:</th>
                        <td><input type="text" name="patient_id" required></td>
                    </tr>
                    <tr>
                        <th>Doctor_id:</th>
                        <td><input type="text" name="doctor_id" required></td>
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

