/* Hospital-Management-System
Here I create HMS using PHP and MySQL
This is prescription class page */


<?php 
	include "hms_db_config.php";

	class Prescription
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
		public function reg_prescription($medicine,$diagnosis,$instructions,$doctor_id){

			
			
			$sql="SELECT * FROM prescription WHERE medicine='$medicine' OR diagnosis='$diagnosis'";
			
			//checking if the username or email is available in db
			$check =  $this->db->query($sql) ;
			$count_row = $check->num_rows;

			//if the username is not in db then insert to the table
			if ($count_row == 0){
				$sql1="INSERT INTO prescription SET medicine='$medicine', diagnosis='$diagnosis', instructions='$instructions', doctor_id='$doctor_id'";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}
			else { return false;}
		}
	}
?>

