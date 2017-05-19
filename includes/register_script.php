        <?php
include 'connection.inc.php';
if (isset($_POST['register'])) {
        global $con;
        $fullname = mysqli_real_escape_string($con,filter_input(INPUT_POST, 'fullname'));
        $email = mysqli_real_escape_string($con,filter_input(INPUT_POST, 'email'));
        $password = mysqli_real_escape_string($con,filter_input(INPUT_POST, 'password'));
        $cpassword = mysqli_real_escape_string($con,filter_input(INPUT_POST, 'cpassword'));
        
     
     

        $get_email = "select *from users where email='$email'";
        $run_email = mysqli_query($con, $get_email);
        $check = mysqli_num_rows($run_email);

        if ($check == 1) {
            echo "<script>alert('The email is already registered')</script>";
            exit();
        }
        if($password!=$cpassword){
            echo "<script>alert('Both Passwords do not match')</script>";
            exit();
        }
        if (strlen($password) < 8) {
            echo "<script>alert('Password should not be less than 8 charcters')</script>";
            exit();
        } else {
            $insert = "insert into users(fullname,email,password,cpassword)values('$fullname','$email','$password','$cpassword')";
            $run_insert = mysqli_query($con, $insert);
            if ($run_insert) {
                echo "<script>alert('Registration is Succcessfull')</script>";
                //$_SESSION['user_email']=$email;
                echo "<script>window.open('index.php','_self')</script>";
                
            }
        }
    }
?>