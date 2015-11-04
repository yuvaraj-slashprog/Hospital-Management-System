/* Hospital-Management-System
Here I create HMS using PHP and MySQL
User class creation */

<?php 
	include "hms_db_config.php";

	class User
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
		public function reg_user($name,$password,$full_name,$email){

			
			$password = md5($password);
			$sql="SELECT * FROM user WHERE name='$name' OR email='$email'";
			
			//checking if the username or email is available in db
			$check =  $this->db->query($sql) ;
			$count_row = $check->num_rows;

			//if the username is not in db then insert to the table
			if ($count_row == 0){
				$sql1="INSERT INTO user SET name='$name', password='$password', full_name='$full_name', email='$email'";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}
			else { return false;}
		}


		/*** for login process ***/
		public function check_login($emailusername, $password){
        	
        	$password = md5($password);
			$sql2="SELECT user_id from user WHERE  name='$emailusername' and password='$password'";
			
			//checking if the username is available in the table
        	$result = mysqli_query($this->db,$sql2);
        	$user_data = mysqli_fetch_array($result);
        	$count_row = $result->num_rows;
		
	        if ($count_row == 1) {
	            // this login var will use for the session thing
	            $_SESSION['login'] = true; 
	            $_SESSION['user_id'] = $user_data['user_id'];
	            return true;
	        }
	        else{
			    return false;
			}
    	}

    	/*** for showing the username or fullname ***/
    	public function get_full_name($user_id){
    		$sql3="SELECT full_name FROM user WHERE user_id = $user_id";
	        $result = mysqli_query($this->db,$sql3);
	        $user_data = mysqli_fetch_array($result);
	        echo $user_data['full_name'];
    	}
  
    	/*** starting the session ***/
	    public function get_session(){    
	        return $_SESSION['login'];
	    }

	    public function user_logout() {
	        $_SESSION['login'] = FALSE;
	        session_destroy();
	    }

	}
?>
