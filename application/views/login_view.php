<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Login</title>
  </head>
  <body>
     <div class = "container">
        <div class="wrapper">
            <?php echo form_open('verifylogin',array('class' => 'form-signin')); ?>
                <h3 class="form-signin-heading">Please Sign In</h3>
                <?php echo validation_errors('<div class = "alert alert-error">','</div>'); ?>
                <hr class="colorgraph"><br>
                <label for="username">Username:</label>
                <input type="text" class="form-control" size="20" id="username" name="username"  autofocus="" />
                <label for="password">Password:</label>
                <input type="password" size="20" class="form-control" id="passowrd" name="password" />     		  
                <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
            <?php echo form_close() ?>		
        </div>
    </div>
 </body>
</html>

