/* Hospital-Management-System
Here I create HMS using PHP and MySQL
Insert the bill details */


<?php

    include_once 'hms_class_bill.php';
    $bill_detail = new Bill_Detail();

    // Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
    if (isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $register = $bill_detail->reg_bill_detail($bill_no, $bill_date, $patient_id, $bill_amount);
        if ($register) {
            // Registration Success
            echo 'Registration  successful <a href="hms_login.php">Click here</a> to login';
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
      
        <title>Bill Details</title>
		<style>
            #container{width:400px; margin: 0 auto;}
		</style>
		<script language="javascript" type="text/javascript"> 
		    function submitreg() {
                var form = document.reg;
				if(form.bill_no.value == ""){
                    alert( "Enter bill_no." );
                    return false;
                }
                else if(form.bill_date.value == ""){
                    alert( "Enter bill_date." );
                    return false;
                }
                else if(form.patient_id.value == ""){
                    alert( "Enter patient_id." );
                    return false;
                }
                else if(form.bill_amount.value == ""){
                    alert( "Enter bill_amount." );
                    return false;
                }
               
            } 
	</script> 
    </head>
    <body>
        <body>
        <div id="container">
            <h1>Bill Details</h1>
            <form action="" method="post" name="reg">
                <table>
                    <tr>
                        <th> bill_no:</th>
                        <td><input type="text" name="bill_no" required></td>
                    </tr>
                   <tr>
                        <th>bill_date:</th>
                        <td><input type="text" name="bill_date" required></td>
                    </tr>
                    <tr>
                    <tr>
                        <th>patient_id:</th>
                        <td><input type="text" name="patient_id" required></td>
                    </tr>
                    <tr>
                        <th>bill_amount:</th>
                        <td><input type="text" name="bill_amount" required></td>
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

