/* Hospital-Management-System
Here I create HMS using PHP and MySQL
this is doctor class */


<?php 
	include "hms_db_config.php";

	class Doctor
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
		public function reg_doctor($name,$address,$phone,$gender,$specialist){

			
		
			$sql="SELECT * FROM doctor WHERE name='$name' OR specialist='$specialist'";
			
			//checking if the username or email is available in db
			$check =  $this->db->query($sql) ;
			$count_row = $check->num_rows;

			//if the username is not in db then insert to the table
			if ($count_row == 0){
				$sql1="INSERT INTO doctor SET name='$name', address='$address', phone='$phone', gender='$gender',specialist='$specialist'";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}
			else { return false;}
		}



	}
?>
