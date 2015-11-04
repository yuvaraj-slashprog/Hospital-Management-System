/*****Hospital-Management-System
Here I create HMS using PHP and MySQL
login page ****/

<?php
	session_start();
	include_once 'hms_class_user.php';
	$user = new User();

	if (isset($_REQUEST['submit'])) { 
		extract($_REQUEST);   
	    $login = $user->check_login($emailname, $password);
	    if ($login) {
	        // Registration Success
	       header("location:hms_home.php");
	    } else {
	        // Registration Failed
	        echo 'Wrong username or password';
	    }
	}
?>

<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>HMS Login Module</title>
		<style>
            #container{width:400px; margin: 0 auto;}
		</style>
		<script language="javascript" type="text/javascript"> 
            
            function submitlogin() {
                var form = document.login;
				if(form.emailname.value == ""){
					alert( "Enter email or username." );
					return false;
				}
				else if(form.password.value == ""){
					alert( "Enter password." );
					return false;
				}	 
			}
		</script>
	</head>

	<body>
		<div id="container">
			<h1>Login Here</h1>
			
			<form action="" method="post" name="login">
				<table>
					<tr>
						<th>UserName or Email:</th>
						<td><input type="text" name="emailname" required></td>
					</tr>
					<tr>
						<th>Password:</th>
						<td><input type="password" name="password" required></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="submit" value="Login" onclick="return(submitlogin());"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><a href="hms_registration.php">Register new user</a></td>
					</tr>
					
				</table>
			</form>
		</div>
	</body>
</html>
