/*Hospital-Management-System
Here I create HMS using PHP and MySQL
Home page */


<?php
    session_start();
    include_once 'hms_class_user.php';
    $user = new User();

    $user_id = $_SESSION['user_id'];

    if (!$user->get_session())
    {
       header("location:hms_login.php");
    }

    if (isset($_GET['q']))
    {
        $user->user_logout();
        header("location:hms_login.php");
    }
?>
<!DOCTYPE html>>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Home</title>
		<style>
    		body{
    			font-family:Arial, Helvetica, sans-serif;
    		}
    		h1{
    		    font-family:'Georgia', Times New Roman, Times, serif;
    		}
		</style>
    </head>

    <body>
        <div id="container">
            <div id="header">
                <a href="hms_home.php?q=logout">LOGOUT</a>
            </div>
            <div id="main-body">
    			<br/><br/><br/><br/>
    			<h1>
                  Hello <?php $user->get_full_name($user_id); ?>
    			</h1>	
            </div>
            <div id="footer"></div>
        </div>
       <center>
       <br>
       <br>
       <form method = "post" action="hms_ins_pat.php" name="addpatient">
          <input name="addpatient" value="Add New Patient" type="submit"> </form>
       <br>
       <br>
       <form method = "post" action="test/pat_index.php" name="viewpatient">
          <input name="viewpatient" value="View Patient" type="submit"> </form>
       <br>
       <br>
       <form method = "post" action="hms_ins_pre.php" name="prescription">
          <input name="prescription" value="Prescription" type="submit"> </form>
       <br>
       <br>
       <form method = "post" action="hms_ins_doc.php" name="prescription">
          <input name="prescription" value="Add  Doctor" type="submit"> </form>
       <br>
       <br>
       <form method = "post" action="hms_ins_appointment.php" name="prescription">
          <input name="prescription" value="Appointment Details" type="submit"> </form>
       </center> 
    </body>
</html>
