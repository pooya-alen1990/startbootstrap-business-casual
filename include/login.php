<?php
	$error = '';
if(isset($_POST['login'])){
	
		$password = $_POST['password'];
		$password = sha1($password.KEY);
		$mail = $_POST['mail'];
			
			$insert_query = "SELECT * FROM users WHERE mail = '$mail' AND password = '$password' LIMIT 1 ; ";
			$result = mysqli_query($connection,$insert_query);
			$row = mysqli_fetch_assoc($result);
		
			
			if($row){
				
				$_SESSION['MM_ID'] = $row['id'];
				header("Location: $prefix/mypage/");
				
				//$error = LOGIN_SUCCESSFULLY;
				}else{
					$error = LOGIN_FAILED;
					}

			}

?>    
    <div class="container">

        <div class="row">
            <div class="box">
            <?php echo $error; ?>
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Login Form</strong></h2>
                    <hr>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    
                    <form class="form-horizontal" method="post">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="mail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="password" placeholder="Password">
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
                          <button type="submit" name="login" class="btn btn-default">Sign in</button>
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