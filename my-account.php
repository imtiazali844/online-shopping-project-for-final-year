<?php

      
  $conn=mysqli_connect("localhost","root","","adminpanel");   
if (isset($_POST['user_login']))
        {
                $uemail = $_POST['user_email'];
                $upassword = $_POST['user_password'];
                $query="INSERT INTO register(email,password) VALUES('$uemail', '$upassword')";
                $result_query = mysqli_query($conn ,$query);

               

                if($result_query)
                {
                   // echo "you have been registered";
               //   header('location:index.php');
                }
                else
                {
                echo"you are not registered ";
                }
       }

?>



<!-- Start My Account Wrapper -->


<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">login here</h1>
                      <?php
    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
                    
    echo '<h1 class="bg-danger text_white">'.$_SESSION['status'].'</h1>'; 
    unset($_SESSION['status']);
    }
                      ?>
                      
                  </div>
                  <form class="user" action="code.php" method="post">
                    <div class="form-group">
                      <input type="email"name="input_email" class="form-control form-control-user"  placeholder="Enter username...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="input_password" class="form-control form-control-user"  placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                   <button type="submit" name="loginbtn" value="login" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
               
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="admin/register.html">Create an Account!</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>






