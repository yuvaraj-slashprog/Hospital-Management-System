/* Hospital-Management-System
Here I create HMS using PHP and MySQL
connection page for patient */


<?php

require_once 'patient_control.php';

$patient_controller = new Patient_controller();

$patient_controller->handleRequest();

?>
<html>
	<body>
		<a href="../hms_home.php">Click Here to Home!</a>
	</body>
</html>

