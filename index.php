<?php
include 'includes/connection.inc.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Sea Water Quality Monitoring System| Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="layout-boxed login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="index.php"><b>Sea Water Quality Monitoring System</b></a>
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="" method="post" name="form1">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="email" placeholder="Email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <button type="submit" name="signin" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
          </div>
        </form>
        <?php
//session_start();
include 'includes/connection.inc.php';
if (isset($_POST['signin'])) {
        global $con;
        $email = mysqli_real_escape_string($con,filter_input(INPUT_POST, 'email'));
        $pass = mysqli_real_escape_string($con,filter_input(INPUT_POST, 'password'));
        echo $email;
        echo $pass;
        $get_user = "select *from users where email='$email' AND password='$pass'";
        $run_user = mysqli_query($con, $get_user);
        $check = mysqli_num_rows($run_user);
        if($check==1){
            //$_SESSION['user_email']=$email;
          echo "<script>window.open('home.php','_self')</script>";

        }
        else{
          echo '<script>alert("Wrong Credentials");</script>';
            echo "<script>window.open('index.php','_self')</script>";
        }
}
        ?>

          <a href="forgot.php">I forgot my password</a><br>
        <a href="register.php" class="text-center">Register a new membership</a>
      </div>
    </div>
    </script>
  </body>
</html>