<?php
session_start();

                $conn=mysqli_connect("localhost","root","","adminpanel");

            if (isset($_POST['user_login_btn']))
        {
               $user_email = $_POST['user_email'];
                
         $user_password = $_POST['user_password'];
                $query="SELECT * FROM register WHERE email = '$user_email' AND password = '$user_password'";
               $result_query = mysqli_query($conn ,$query);

               $usertypes=mysqli_fetch_array($result_query);

                if($result_query){
                if($usertypes['usertype'] == "user")
                {
                    $_SESSION['username']=$user_email;
                 
                  header("location:index.php");
                   
                       
                }
               else
               {
                 $_SESSION['status']="Your email/password is wrong";
                    header("location:user_login.php");
            echo '<h1>'."your email/password is wrong".'</h1>';
               }
                      
       }
      }
             
      
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login system</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class = "container">  <br><br>
       <h2 class="text-center text-success">Lgoin Form</h2>  <hr>
     <div class = "row">
         
        <div class = "col-sm-8 offset-sm-3">
         
              <?php
    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
                    
    echo '<h1 class="bg-danger text_white">'.$_SESSION['status'].'</h1>'; 
    unset($_SESSION['status']);
    }
                      ?>
            
           <form class="user"action="" method="POST">
                <div class = "form-group">
                      <label>Username</label>
                        <input type="text" name="user_email" class="form-control form-control-user" placeholder="Your Username">
                </div>
                <div class = "form-group">
                      <label>password</label>
                        <input type="password" name="user_password" class="form-control form-control-user" placeholder="Your password">
                </div>
               <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                <button type="submit" name="user_login_btn" value="login" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
           </form>
             <hr>
                
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="admin/User_register.php">Create an Account!</a>
                  </div>
        
        </div> 
     </div>
     
     </div>
</body>
</html>