<?php
session_start();
include("include/security.php");
include("include/header.php");
include("include/sidebar.php");

?>


<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="code.php" method="post">
      <div class="modal-body">
          <div class="form-group">
          <label class="required">User Name</label>
              <input type="text" name="username" class="form-control" placeholder="Enter Username"required>
          </div>
          
          <div class="form-group">
              <label class="required">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Enter email"required>
          </div>
          
          <div class="form-group">
          <label class="required">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter password"required>
          </div>
          
          <div class="form-group">
          <label class="required">Confirm password</label>
              <input type="password" name="confirmpassword" class="form-control" placeholder="Enter confirm password"required>
          </div>
       <input type="hidden" name="usertype"value="admin">
         <!-- <div class="form-group">
              <label>Usertype</label>
              <select name="usertype" class="form-control">
             <option value="admin">Admin</option>
            <option value="user">User</option>
             </select>
          </div>-->
      </div>
              
           
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
        </button>
        <button type="submit" name="registerbtn" class="btn btn-primary">Save
        </button>
      </div>
             </form>
    </div>
  </div>
</div>

<div class="container-fluid">
    
<!--data table example-->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile
        <button type="button" class="btn btn-primary "data-toggle="modal" data-target="#addadminprofile">Add Admin Profile
        </button>
        </h6>
    </div>
    <div clas="card-body">
        <?php
        if(isset($_SESSION['success']) && $_SESSION['success'] !='')
        {
            echo '<h2>'.$_SESSION['success'].'</h2>';
            unset($_SESSION['success']);
        }
        
        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
        {
            echo '<h2>'.$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }
        ?>
        
    <div class="table-responsive">
        <?php
        $conn=mysqli_connect("localhost","root","","adminpanel");
        $query="SELECT * FROM register";
         $query_run=mysqli_query($conn , $query);
        ?>
        
        <table class="table table-bordered" id="dataTable"width="100%"cellspacing="0">
        <thead>
        <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Usertype</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>    
        </thead>
            <tbody>
                <?php
                if(mysqli_num_rows($query_run)>0)
                {
                    while($row=mysqli_fetch_assoc($query_run))
                    {
                     ?>
               
                
                <tr>
                    <td><?php echo $row['Id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['usertype'];?></td>
                    <td> 
                        <form action="register_edit.php" method="post">
                        <input type="hidden" name="edit_id" value="<?php echo $row['Id'];?>">
                        <button type="submit" name="edit_btn" class="btn btn-success">Edit
                        </button>
                        </form>
                    </td>
                    <td>
                 <form action="code.php" method="post">
                 <input type="hidden" name="delete_id" value="<?php echo
                 $row['Id'];?>">
                 <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                </form>
                    </td>
              
                </tr>
                 <?php
                    }
                }
                else{
                    echo "record not found";
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>
<!----container-fluid--->
<?php
include("include/scripts.php");

?>