<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>EdTech Login</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>res/css/signin.css">
  
 </head>
 <body>

   <!--<h1>Login </h1> -->
   <div class="container">
    <form class="form-signin" action = "verifylogin" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
      <?php echo validation_errors(); ?>
     <label for="username" class="sr-only">Username</label>
     <input type="text" size="20" id="username" name="username" class="form-control" placeholder="Username" required autofocus/>
     <br/>
     <label for="password" class="sr-only"> Password</label>
     <input type="password" size="20" id="passowrd" name="password" class="form-control" placeholder="Password" required/>
     <br/>
     <!-- <input type="submit" value="Login"/> -->
     <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Sign in</button>
   </form>

 </div>

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

 </body>
</html>