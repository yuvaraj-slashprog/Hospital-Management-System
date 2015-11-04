/* Hospital-Management-System
Here I create HMS using PHP and MySQL
this is appointment page class */

<?php 
	include "hms_db_config.php";

	class Appointment
	{
		
		public $db;
		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		
			if(mysqli_connect_errno()) {
	 
				echo "Error: Could not connect to database.";
	 
			exit;
 
			}
		}

		/*** for registration process ***/
		public function reg_appointment($appointment_id,$appointment_date,$appointment_time,$patient_id,$doctor_id){

			
		
			$sql="SELECT * FROM appointment WHERE appointment_id='$appointment_id' OR appointment_date='$appointment_date'";
			
			//checking if the username or email is available in db
			$check =  $this->db->query($sql) ;
			$count_row = $check->num_rows;

			//if the username is not in db then insert to the table
			if ($count_row == 0){
				$sql1="INSERT INTO appointment SET appointment_id='$appointment_id', appointment_date='$appointment_date', appointment_time='$appointment_time', patient_id='$patient_id', doctor_id='$doctor_id'";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}
			else { return false;}
		}



	}
?>
