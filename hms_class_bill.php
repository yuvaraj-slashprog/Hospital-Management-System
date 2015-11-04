/* Hospital-Management-System
Here I create HMS using PHP and MySQL
bill class page */


<?php 
	include "hms_db_config.php";

	class Bill_Detail
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
		public function reg_bill_detail($bill_no,$bill_date,$patient_id,$bill_amount){

			
		
			$sql="SELECT * FROM bill_detail WHERE bill_no='$bill_no' OR bill_date='$bill_date'";
			
			//checking if the username or email is available in db
			$check =  $this->db->query($sql) ;
			$count_row = $check->num_rows;

			//if the username is not in db then insert to the table
			if ($count_row == 0){
				$sql1="INSERT INTO bill_detail SET bill_no='$bill_no', bill_date='$bill_date', patient_id='$patient_id', bill_amount='$bill_amount'";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}
			else { return false;}
		}



}
?>
