<?php
include '../../core/core.php';

define('REPASSWORD_FAILED',"<div class='col-sm-12'>
								  <div class='alert alert-danger alert-dismissable'>
									<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									 	password doesn't match the confirm password !!!
								  </div>
							</div>");

define('SIGNUP_SUCCESSFULLY',"<div class='col-sm-12'>
								  <div class='alert alert-success alert-dismissable'>
									<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									 	successfully...
								  </div>
							</div>");

define('SIGNUP_FAILED',"<div class='col-sm-12'>
								  <div class='alert alert-danger alert-dismissable'>
									<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									 	failed
								  </div>
							</div>");

	$error = '';

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$mail = $_POST['mail'];
		$register_date = time();
		
		if($password === $repassword){
			
			$password = sha1($password.KEY);
			
			$insert_query = "INSERT INTO `users`(`id`, `firstname`, `lastname`, `mail`, `password`, `register_date`) VALUES ('','$firstname','$lastname','$mail','$password','$register_date')";
			$result = mysqli_query($connection,$insert_query);
			
			
			if($result){
				$error = SIGNUP_SUCCESSFULLY;
				}else{
					$error = SIGNUP_FAILED;
					}

			
			}else{
				$error = REPASSWORD_FAILED;
				}
		
	echo $error;
?>

