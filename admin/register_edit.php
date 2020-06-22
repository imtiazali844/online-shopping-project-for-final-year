<?php
session_start();
include('include/security.php');
include("include/header.php");


?>

<div class="container-fluid">
    
<!--data table example-->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile
    </h6>
    </div>
    <div clas="card-body">
        <?php
        $conn=mysqli_connect("localhost","root","","adminpanel");

        if(isset($_POST['edit_btn']))
        {
            $id= $_POST['edit_id'];
            $query="SELECT * FROM register WHERE Id='$id' ";
            $query_run=mysqli_query($conn,$query);
          
    
        foreach($query_run as $row)
        {
            ?>
        <form action="code.php" method="post">
        <input type="hidden" name="edit_id" value="<?php echo $row['Id']; ?>">
         <div class="form-group">
          <label>User Name</label>
              <input type="text" name="edit_username" value="<?php echo $row['username'];?>" class="form-control" placeholder="Enter Username">
          </div>
          
          <div class="form-group">
              <label>Email</label>
              <input type="email" name="edit_email" value="<?php echo $row['email']; ?>" class="form-control" placeholder="Enter email">
          </div>
          
          <div class="form-group">
          <label>Password</label>
              <input type="password" name="edit_password" value="<?php echo $row['password']; ?>"class="form-control" placeholder="Enter password">
          </div>
            
             <div class="form-group">
          <label>Usertype</label>
              <select name="update_usertype" class="form-control">
             <option value="admin">Admin</option>
            <option value="user">User</option>
             </select>
          </div>
        <a href="Register.php" class="btn btn-danger">Cancel</a>
        <button type="submit" name="updatebtn" class="btn btn-primary">UPDATE</button>  
        </form>
        <?php
        }
          }  
        ?>  

        
    
    </div>
    </div>
</div>






<?php
include("include/scripts.php");

?>

