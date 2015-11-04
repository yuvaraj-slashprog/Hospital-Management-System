/* Hospital-Management-System
Here I create HMS using PHP and MySQL
Insert prescription details */

<?php

    include_once 'hms_class_prescription.php';
    $prescription = new Prescription();

    // Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
    if (isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $register = $prescription->reg_prescription($medicine, $diagnosis,$instructions, $doctor_id);
        if ($register) {
            // Registration Success
            echo 'Registration  successful <a href="hms_login.php">Click here</a> to login';
        } else {
            // Registration Failed
            echo 'Registration failed. please try again';
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
      
        <title>Prescription</title>
		<style>
            #container{width:400px; margin: 0 auto;}
		</style>
		<script language="javascript" type="text/javascript"> 
		    function submitreg() {
                var form = document.reg;
				if(form.medicine.value == ""){
                    alert( "Enter medicine." );
                    return false;
                }
                else if(form.diagnosis.value == ""){
                    alert( "Enter diagnosis." );
                    return false;
                }
                else if(form.instructions.value == ""){
                    alert( "Enter instructions." );
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
            <h1>Prescription Details</h1>
            <form action="" method="post" name="reg">
                <table>
                    <tr>
                        <th> Medicine:</th>
                        <td><input type="text" name="medicine" required></td>
                    </tr>
                   <tr>
                        <th>Diagnosis:</th>
                        <td><input type="text" name="diagnosis" required></td>
                    </tr>
                    <tr>
                    <tr>
                        <th>Instructions:</th>
                        <td><input type="text" name="instructions" required></td>
                    </tr>
                    <tr>
                        <th>Doctor_id:</th>
                        <td><input type="text" name="doctor_id" required></td>
                    </tr>
                    
                        <td>&nbsp;</td>
                        <td><input type="submit" name="submit" value="Register" onclick="return(submitreg());"></td>
                    </tr>
                    <tr>
                        <!---<td>&nbsp;</td>
                        <td><a href="hms_home.php"> Click Here to Home!</a></td>
                    </tr>--->
                    <tr>
                        <td>&nbsp;</td>
                        <td><a href="hms_ins_bill.php"> Click Here to Bill Details!</a></td>
                    </tr>
             </table>
          </form>
       </div>
    </body>
  </body>
</html>

