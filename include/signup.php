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
                <span class="result"></span>
                    <form class="form-horizontal" method="post" id="myForm">
                    
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
                      
                     
                      <div class="control-group">
                        <label class="control-label col-sm-2">Password </label>
                        <div class="controls col-sm-10 ">
                          <input type="password" name="password" required id="password" class="form-control"  >
                          <p class="help-block"></p>
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label col-sm-2">Re-Password </label>
                        <div class="controls col-sm-10 ">
                          <input type="password" name="repassword" required data-validation-matches-match="password" data-validation-matches-message=
    "Must match password entered above" class="form-control" >
                          <p class="help-block"></p>
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
                          <button type="submit" class="btn btn-default" name="register2" id="register">Signup</button>
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
                    	<h2 class="intro-text text-center">Signup
                    </h2>
                    <hr>
                </div>
                
                
            </div>
        </div>

    </div>
    <!-- /.container -->
<script>
	
$(document).ready(function() {
    $("#register").click(function(e) {
		e.preventDefault();

        $.post( "<?php echo $prefix; ?>/include/ajax/signup_proccess.php",
				$('#myForm').serialize()
				, function( data ) {
		  $( ".result" ).html( data );
		});
    });
	
});
</script>