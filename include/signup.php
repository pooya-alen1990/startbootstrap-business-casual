<?php
	$error = '';
	if(isset($_POST['register'])){
		
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$mail = $_POST['mail'];
		$register_date = time();
		
		if($password === $repassword){
			
			$password = sha1($password.KEY);
			
			$insert_query = "INSERT INTO `users`(`id`, `firstname`, `lastname`, `mail`, `password`, `register_date`) VALUES ('','$firstname','$lastname','$password','$mail','$register_date')";
			$result = mysqli_query($connection,$insert_query);
			if($result){
				$error = SIGNUP_SUCCESSFULLY;
				}else{
					$error = SIGNUP_FAILED;
					}

			
			}else{
				$error = REPASSWORD_FAILED;
				}
		
		}
?>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Signup Form</strong></h2>
                    <hr>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <?php echo $error; ?>
                    <form class="form-horizontal" method="post">
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">F-name</label>
                        <div class="col-sm-10">
                          <input type="text" name="firstname" class="form-control" placeholder="first name">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">L-name</label>
                        <div class="col-sm-10">
                          <input type="text" name="lastname" class="form-control" placeholder="last name">
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" name="mail" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Re-Password</label>
                        <div class="col-sm-10">
                          <input type="password" name="repassword" class="form-control" placeholder="Re-Password">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Remember me
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default" name="register">Sign in</button>
                        </div>
                      </div>
                    </form>
                    
                    
                    
                    
                </div>
                <div class="col-md-3"></div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    	<h2 class="intro-text text-center">Login
                    </h2>
                    <hr>
                </div>
                
                
            </div>
        </div>

    </div>
    <!-- /.container -->