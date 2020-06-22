<?php
session_start();
$conn=mysqli_connect("localhost","root","","adminpanel");
             
        
                 if (isset($_POST['login_btn']))
        {
               $input_email = $_POST['input_email'];
                $input_password = $_POST['input_password'];
                $query="SELECT * FROM register WHERE email = '$input_email' AND password = '$input_password'";
               $result_query = mysqli_query($conn ,$query);

               $usertypes=mysqli_fetch_array($result_query);

               
                
                if($result_query)
                {
                if ($usertypes['usertype'] == "admin"){
                $_SESSION['adminprofile']=$input_email;
                header('location:index.php');
                
                }
              else
               {
                 $_SESSION['status']="Your email/password is wrong";
                   header('location:login.php');
                  
               }
                }
                }

                   
/**--------It-is--login-form-for-admin-and-user-------*/

 

/**--------It-is--admin-register-form-for-admin--------*/

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $usertype=$_POST['usertype'];

if($password === $confirmpassword)
{
   $query="INSERT INTO register(username,email,password,usertype) VALUES('$username','$email','$password','$usertype')";
    $query_run=mysqli_query($conn , $query);

if($query_run)
{
   
    $_SESSION['success']="Admin Profile Added";
    header('location:Register.php');
    //echo "record is inserted in database";
}
else
{
  $_SESSION['status']="Admin Profile Not Added";
    header('location:Register.php');
    
} 
}
    else{
        $_SESSION['status']="conform password does not matched";
    header('location:Register.php');
    }

}


/**---edit/update-admin-and-user-to-register-table-in-database------------*/



if(isset($_POST['updatebtn']))
{
    $id= $_POST['edit_id'];
     $uname= $_POST['edit_username'];
     $uemail= $_POST['edit_email'];
     $upassword= $_POST['edit_password'];
     $usertypeupdate=$_POST['update_usertype'];
    $query="UPDATE register SET username='$uname', email='$uemail', password='$upassword',usertype='$usertypeupdate' WHERE Id='$id' ";
   $query_run=mysqli_query($conn,$query);
    if($query_run)
    {
         $_SESSION['success']="Your data is updated";
    header('location:Register.php');
    }
    else{
         $_SESSION['status']="Your data is not updated";
    header('location:Register.php');
        
    }


}



/**--------delete-admin-and-user-from-register-table-in-database-------*/





if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query="DELETE FROM register WHERE id='$id' ";
     $query_run=mysqli_query($conn, $query);
    
    
    if($query_run)
    { 
    $_SESSION['success']="Your data is deleted";
    header('location:Register.php');
    
    }
    else
    {
        $_SESSION['status']="Your data is not deleted";
    header('location:Register.php');
    }
}





/**----------add-product-to-product-table-in-database-------*/

if(isset($_POST['addproduct']))
{
    $productid= $_POST['pedit_id'];
    $Productname = $_POST['pname'];
    $Productprice = $_POST['pprice'];
   
    $image = "upload/".time().$_FILES['pimage']['name'];
    $Productcatagory=$_POST['category'];
    $Productdescription=$_POST['textdescription'];
  if(move_uploaded_file($_FILES['pimage']['tmp_name'],$image) )
    {  
    $query="INSERT INTO product(product_name,product_price,
product_image,product_category,product_desc) VALUES('$Productname','$Productprice','$image',
'$Productcatagory','$Productdescription')";
    $query_run=mysqli_query($conn, $query);
  
        if($query_run)
    { 
           
    $_SESSION['success']="Your data is inserted";
          //  echo "record is not inserted ";
    header('location:addproduct.php');
    
    }
    else
    {
        //echo "record is not inserted ";
        $_SESSION['status']="Your data is not inserted";
    header('location:addproduct.php');
    }
  
  }

    
}
 /**------getting-data-from-addproductpage-to-product_edit_page-----*/


if(isset($_POST['pdelete_btn']))
{
    $id = $_POST['pdelete_id'];
    $query="DELETE FROM product WHERE id='$id' ";
     $query_run=mysqli_query($conn, $query);
    
    
    if($query_run)
    { 
    $_SESSION['success']="Your data is deleted";
    header('location:addproduct.php');
    
    }
    else
    {
        $_SESSION['status']="Your data is not deleted";
    header('location:addproduct.php');
    }
}


/**------getting-data-from-addproductpage-to-product_edit_page-----*/



if(isset($_POST['proupdatebtn']))
{
     $productid= $_POST['pedit_id'];
     $productname= $_POST['pname'];
     $productprice= $_POST['pprice'];
     
     $image="upload/".time().$_FILES['pimage']['name'];
     $productcategory= $_POST['category'];
     $textdescription= $_POST['textdescription'];
     
 $query="UPDATE product SET product_name='$productname', product_price='$productprice',
 product_image='$image',product_category='$productcategory',
 product_desc='$textdescription' WHERE id='$productid' ";
   $query_run=mysqli_query($conn,$query);
    if($query_run)
    {
        move_uploaded_file($_FILES['pimage']['tmp_name'],$image);
         $_SESSION['success']="Your data is updated";
    header('location:addproduct.php');
    }
    else{
         $_SESSION['status']="Your data is not updated";
    header('location:product_edit.php');
        
    
    }

}

/**--------It-is--user-registration-form-for--user-------*/

 $conn=mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['user_register']))
        {
            
         $r_user_name = $_POST['user_name'];
         $r_user_email = $_POST['user_email'];
         $r_user_pass = $_POST['user_pass'];
         $r_user_conferm_pass = $_POST['user_conferm_pass'];
         $r_user_type=$_POST['usertype'];
          
if($r_user_pass === $r_user_conferm_pass)
{
   $query="INSERT INTO register(username,email,password,usertype) VALUES('$r_user_name','$r_user_email','$r_user_pass','$r_user_type')";
    $query_run=mysqli_query($conn,$query);

if($query_run)
{
   
    //$_SESSION['success']="User Profile Added";
    header('location:../user_login.php');
    
}
else 
{
  $_SESSION['status']="User Profile Not Added";
    header('location:User_register.php');
   // echo "record is not inserted in database";
}
}

    else{
        $_SESSION['status']="conform password does not matched";
    header('location:user_register.php');
    }


}
//////////////////////////////////////


if(isset($_POST['remove_item']))
{
    $id = $_POST['cart_delete_id'];
    
    $query="DELETE FROM add_to_cart WHERE id='$id' ";
     $query_run=mysqli_query($conn, $query);
    
    
    if($query_run)
    { 
    //$_SESSION['success']="Your data is deleted";
    header('location:../index.php');
    
    }
    else
    {
        $_SESSION['status']="Your data is not deleted";
    header('location:../index.php');
    }
}


//////////////////////////////////////////////////////////////////////////////


 





?>
